<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "project_stats".
 *
 * @property int $id
 * @property int|null $project_id
 * @property string|null $name
 * @property string|null $value
 */
class ProjectStats extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project_stats';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id'], 'integer'],
            [['name', 'value'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_id' => 'Project ID',
            'name' => 'Название',
            'value' => 'Значение',
        ];
    }
}
