<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "heating_slider".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string|null $image
 * @property int $status
 */
class HeatingSlider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'heating_slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['status'], 'integer'],
            [['title', 'description', 'image'], 'string', 'max' => 255],
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
            'description' => 'Подзаголовок',
            'image' => 'Изображение',
            'status' => 'Статус',
        ];
    }
    public function getAllSlides(){
        return self::find()->where(['status' => 1])->all();
    }
}
