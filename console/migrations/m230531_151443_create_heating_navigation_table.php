<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%heating_navigation}}`.
 */
class m230531_151443_create_heating_navigation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%heating_navigation}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'section_id' => $this->string(255)->notNull(),
            'image' => $this->string(255)->null(),
            'order_by' => $this->tinyInteger(2)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%heating_navigation}}');
    }
}
