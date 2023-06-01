<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contacts_page}}`.
 */
class m230528_131635_create_contacts_page_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contacts_page}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),
            'address' => $this->string(255)->notNull(),
            'legal_address' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'phone_1' => $this->string(20)->notNull(),
            'phone_2' => $this->string(20)->notNull(),
            'requisites' => $this->string(255)->notNull(),
            'location' => $this->text()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contacts_page}}');
    }
}
