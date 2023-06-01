<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%articles}}`.
 */
class m230522_181051_create_articles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%articles}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'content' => $this ->text()->notNull(),
            'published_date'=>$this->dateTime()->defaultExpression('NOW()'),
            'image' => $this->string(255)->null(),
            'slug' => $this->string(255)->null(),
            'status'=>$this->tinyInteger(2)->notNull()->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%articles}}');
    }
}
