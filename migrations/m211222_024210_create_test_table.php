<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%test}}`.
 */
class m211222_024210_create_test_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%test}}', [
            'id' => $this->primaryKey(),
            'question' => $this->tinyInteger()->notNull(),
            'answer' => $this->string()->notNull(),
            'variants' => $this->string()->notNull(),
            'subject_id' => $this->integer()
        ]);
        $this->addForeignKey('subject_id', 'test', 'subject_id', 'subject', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('subject_id', 'test');
        $this->dropTable('{{%test}}');
    }
}
