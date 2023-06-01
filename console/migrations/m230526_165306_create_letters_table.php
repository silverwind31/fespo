<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%letters}}`.
 */
class m230526_165306_create_letters_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%letters}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(255)->null(),
            'status'=>$this->tinyInteger(2)->notNull()->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%letters}}');
    }
}
