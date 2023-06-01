<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%work_slider}}`.
 */
class m230526_174718_create_work_slider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%work_slider}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%work_slider}}');
    }
}
