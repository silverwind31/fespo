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
            'project_id' => $this->integer(10) ->null(),
            'name' => $this->string(255)->null(),
            'value' => $this->string(255)->null(),
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
