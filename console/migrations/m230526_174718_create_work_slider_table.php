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
            'description' => $this ->text()->notNull(),
            'image' => $this->string(255)->null(),
            'url' => $this->string(255)->notNull(),
            'status'=>$this->tinyInteger(2)->notNull()->defaultValue(1)
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
