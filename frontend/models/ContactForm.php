<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * User model
 *
 * @property integer $id
 * @property string $name
 * @property string $param
 * @property string $email
 * @property string $phone
 */
class ContactForm extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%contact_form}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'phone'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            ['param', 'string']
        ];
    }


    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose([
            'html' => 'mytemplate',
        ],
            [
                'id' => $this->id,
                'name' => $this->name,
                'phone' => $this->phone,
                'param' => $this->param,

            ])
            ->setTo('TEST.TH.WELCOME@GMAIL.COM')
            ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
            ->setSubject('Добавлена новая заявка')
            ->send();
    }
}
