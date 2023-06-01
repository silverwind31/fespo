<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "heating_navigation".
 *
 * @property int $id
 * @property string $title
 * @property string $section_id
 * @property string|null $image
 * @property int $order_by
 */
class HeatingNavigation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'heating_navigation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'section_id', 'order_by'], 'required'],
            [['order_by'], 'integer'],
            [['title', 'section_id', 'image'], 'string', 'max' => 255],
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
            'section_id' => 'ID блока',
            'image' => 'Изображение',
            'order_by' => 'Порядок сортировки',
        ];
    }

    public function getAllNavs(){
        return self::find()->orderBy('order_by', SORT_ASC)->all();
    }
}
