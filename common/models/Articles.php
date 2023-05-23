<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string|null $published_date
 * @property string|null $image
 * @property int $status
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['content'], 'string'],
            [['published_date'], 'safe'],
            [['status'], 'integer'],
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
            'title' => 'Заголовок',
            'content' => 'Контент',
            'published_date' => 'Дата публикации',
            'status' => 'Статус',
            'image' => 'Изображение'
        ];
    }
    public function getMainArticles()
    {
        return self::find()
            ->where(['status' => 1])
            ->orderBy('published_date', SORT_ASC)
            ->limit(3)
            ->all();
    }
    public function getAllArticles()
    {
        return Articles::find()->where(['status' => 1]);
    }
    public function findById($id)
    {
        return self::findOne($id);
    }
}
