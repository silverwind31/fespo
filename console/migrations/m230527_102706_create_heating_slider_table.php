<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%heating_slider}}`.
 */
class m230527_102706_create_heating_slider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%heating_slider}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%heating_slider}}');
    }
}
