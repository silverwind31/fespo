<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%main_page}}`.
 */
class m230529_093348_create_main_page_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%main_page}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%main_page}}');
    }
}
