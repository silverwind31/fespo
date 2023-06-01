<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%heating_blocks}}`.
 */
class m230531_170357_create_heating_blocks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%heating_blocks}}', [
            'id' => $this->primaryKey(),
            'title' => $this->text()->notNull(),
            'content' => $this->text()->null(),
            'order_by' => $this->tinyInteger(2)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%heating_blocks}}');
    }
}
