<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new ContactForm();
        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                if ($model->sendEmail($model->email)) {
                    Yii::$app->session->setFlash('success', 'Спасибо, Ваша заявка отправлена и будет обработана в ближайшее время.');
                } else {
                    Yii::$app->session->setFlash('error', 'There was an error sending your message.');
                }
                return $this->refresh();
            }
        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }
    }

}
