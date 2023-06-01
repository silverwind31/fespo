<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about_company}}`.
 */
class m230530_111345_create_about_company_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%about_company}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'block_left_content' => $this->text()->null(),
            'block_right_content' => $this->text()->null(),
            'main_image' => $this->string(255)->null(),
            'block_middle_content' => $this->text()->null(),
            'info_image' => $this->string(255)->null(),
            'block_bottom_description' => $this->text()->null()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%about_company}}');
    }
}
