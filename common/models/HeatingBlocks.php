<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "heating_blocks".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $order_by
 */
class HeatingBlocks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'heating_blocks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'order_by'], 'required'],
            [['content'], 'string'],
            [['order_by'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'order_by' => 'Order By',
        ];
    }
}
