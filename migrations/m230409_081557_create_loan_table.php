<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%loan}}`.
 */
class m230409_081557_create_loan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%loan}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%loan}}');
    }
}
