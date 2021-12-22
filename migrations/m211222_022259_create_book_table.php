<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book}}`.
 */
class m211222_022259_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'path' => $this->string(),
            'subject_id' => $this->integer(),


        ]);
        $this->addForeignKey('subject_id', 'book', 'subject_id', 'subject', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('subject_id', 'book');
        $this->dropTable('{{%book}}');
    }
}
