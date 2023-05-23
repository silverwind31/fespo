<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%promo_slider}}`.
 */
class m230522_172553_create_promo_slider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%promo_slider}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'description' => $this ->string(255)->notNull(),
            'image' => $this->string(255)->null(),
            'status'=>$this->tinyInteger(2)->notNull()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%promo_slider}}');
    }
}
