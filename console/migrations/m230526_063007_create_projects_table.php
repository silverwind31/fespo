<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%projects}}`.
 */
class m230526_063007_create_projects_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%projects}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'description' => $this ->string(255)->notNull(),
            'content' => $this ->text()->notNull(),
            'image' => $this->string(255)->null(),
            'project_garantees_title' => $this->string(255)->notNull(),
            'project_garantees_description_1' => $this->text()->notNull(),
            'project_garantees_description_2' => $this->text()->notNull(),
            'slug' => $this->string(255)->null(),
            'order_by' => $this->integer(10)->notNull(),
            'status'=>$this->tinyInteger(2)->notNull()->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%projects}}');
    }
}
