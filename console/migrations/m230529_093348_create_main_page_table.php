<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%main_page}}`.
 */
class m230529_093348_create_main_page_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%main_page}}', [
            'id' => $this->primaryKey(),
            'top_text' => $this->text()->null(),
            'top_description' => $this->text()->null(),
            'block_title' => $this->string(255)->notNull(),
            'block_subtitle' => $this->text()->null(),
            'block_first_image' => $this->string(255)->null(),
            'block_feature_1_title' => $this->string(255)->notNull(),
            'block_feature_1_subtitle' => $this->string(255)->notNull(),
            'block_feature_2_title' => $this->string(255)->notNull(),
            'block_feature_2_subtitle' => $this->string(255)->notNull(),
            'block_feature_3_title' => $this->string(255)->notNull(),
            'block_feature_3_subtitle' => $this->string(255)->notNull(),
            'block_content_caption' => $this->text()->null(),
            'block_content' => $this->text()->null(),
            'block_second_image' => $this->string()->null(),
            'about_company_title' => $this->string()->notNull(),
            'about_company_content' => $this->text()->null(),
            'about_company_image' => $this->string()->null()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%main_page}}');
    }
}
