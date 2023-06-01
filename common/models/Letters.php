<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "letters".
 *
 * @property int $id
 * @property string|null $image
 * @property int $status
 */
class Letters extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'letters';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Изображение',
            'status' => 'Статус',
        ];
    }
    public function getAllLetters(){
        return self::find()->where(['status' => 1])->all();
    }
}
