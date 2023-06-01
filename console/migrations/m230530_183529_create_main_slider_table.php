<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%main_slider}}`.
 */
class m230530_183529_create_main_slider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%main_slider}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%main_slider}}');
    }
}
