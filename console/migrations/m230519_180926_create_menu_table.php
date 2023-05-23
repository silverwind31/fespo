<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%menu}}`.
 */
class m230519_180926_create_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%menu}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'link' => $this->string(255)->notNull(),
            'position' => $this->tinyInteger(2)->notNull(),
            'order_by' => $this->tinyInteger(2)->notNull(),
            'status'=>$this->tinyInteger(2)->notNull()->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%menu}}');
    }
}
