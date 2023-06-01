<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "projects_slider".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string|null $image
 * @property int $status
 */
class ProjectsSlider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projects_slider';
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
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'status' => 'Status',
        ];
    }
}