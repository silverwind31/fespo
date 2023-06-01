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
