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
