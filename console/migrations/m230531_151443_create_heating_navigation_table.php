<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%heating_navigation}}`.
 */
class m230531_151443_create_heating_navigation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%heating_navigation}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%heating_navigation}}');
    }
}
