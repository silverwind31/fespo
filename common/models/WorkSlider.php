<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "work_slider".
 *
 * @property int $id
 * @property string $description
 * @property string|null $image
 * @property string $url
 * @property int $status
 */
class WorkSlider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'work_slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'url'], 'required'],
            [['description'], 'string'],
            [['status'], 'integer'],
            [['image', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Контент',
            'status' => 'Статус',
            'url' => 'Ссылка',
            'image' => 'Изображение',
        ];
    }

    public function getAllSlides(){
        return self::find()->where(['status' => 1])->all();
    }
}
