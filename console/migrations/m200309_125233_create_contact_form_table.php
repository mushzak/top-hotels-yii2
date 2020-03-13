<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contact_form}}`.
 */
class m200309_125233_create_contact_form_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contact_form}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->Null(),
            'param' => $this->text()->Null(),
            'phone' => $this->text()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contact_form}}');
    }
}
