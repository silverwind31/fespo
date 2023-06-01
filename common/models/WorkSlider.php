<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "work_slider".
 *
 * @property int $id
 * @property string $description
 * @property int $status
 * @property string $url
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
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'status' => 'Status',
            'url' => 'Url',
        ];
    }
}
