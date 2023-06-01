<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $content
 * @property string|null $image
 * @property string $project_garantees_title
 * @property string $project_garantees_description_1
 * @property string $project_garantees_description_2
 * @property string|null $slug
 * @property int $order_by
 * @property int $status
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'content', 'project_garantees_title', 'project_garantees_description_1', 'project_garantees_description_2', 'order_by'], 'required'],
            [['content', 'project_garantees_description_1', 'project_garantees_description_2'], 'string'],
            [['order_by', 'status'], 'integer'],
            [['name', 'description', 'image', 'project_garantees_title', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'description' => 'Подзаголовок',
            'content' => 'Контент',
            'image' => 'Изображение',
            'project_garantees_title' => 'Заголовок гарантии',
            'project_garantees_description_1' => 'Описание гарантий проекта 1',
            'project_garantees_description_2' => 'Описание гарантий проекта 2',
            'slug' => 'Slug',
            'order_by' => 'Порядок сортировки',
            'status' => 'Статус',
        ];
    }
    public function getProjectStats(){
        return $this->hasMany(ProjectStats::className(),['project_id'=>'id'])->all();
    }
    public function getRandomProjects($limit)
    {
        return self::find()->where(['status' => 1])->orderBy('RAND()')->limit($limit)->all();
    }

    public function findById($id)
    {
        return self::findOne($id);
    }

    public function getTotalProjectsCount()
    {
        return self::find()->where(['status' => 1])->count();
    }

    public function getPaginatedProjects($pagination)
    {
        return self::find()->where(['status' => 1])->offset($pagination->offset)->limit($pagination->limit)->all();
    }
}
