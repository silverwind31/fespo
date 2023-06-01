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
