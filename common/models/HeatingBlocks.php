<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "heating_blocks".
 *
 * @property int $id
 * @property string $title
 * @property string|null $content
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
            [['title', 'order_by'], 'required'],
            [['title', 'content'], 'string'],
            [['order_by'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'content' => 'Содержимое',
            'order_by' => 'Порядок сортировки',
        ];
    }
    public function getAllBlocks(){
        return self::find()->orderBy('order_by', SORT_ASC)->all();
    }
}
