<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bill}}`.
 */
class m211222_022833_create_bill_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bill}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'teacher_id' => $this->integer(),
            'subject_id' => $this->integer(),
            'grade' => $this->float(),
        ]);
        $this->addForeignKey('user_id', 'bill', 'user_id', 'user', 'id');
        $this->addForeignKey('teacher_id', 'bill', 'teacher_id', 'user', 'id');
        $this->addForeignKey('subject_id', 'bill', 'subject_id', 'subject', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('user_id', 'bill');
        $this->dropForeignKey('teacher_id', 'bill');
        $this->dropForeignKey('subject_id', 'bill');
        $this->dropTable('{{%bill}}');
    }
}
