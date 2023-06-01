<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "heating_navigation".
 *
 * @property int $id
 * @property int $section_id
 * @property string $title
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
            [['section_id', 'title', 'order_by'], 'required'],
            [['section_id', 'order_by'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'section_id' => 'Section ID',
            'title' => 'Title',
            'image' => 'Image',
            'order_by' => 'Order By',
        ];
    }
}
