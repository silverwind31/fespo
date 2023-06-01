<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project_stats}}`.
 */
class m230527_050409_create_project_stats_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%project_stats}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%project_stats}}');
    }
}
