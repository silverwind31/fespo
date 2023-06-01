<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "main_page".
 *
 * @property int $id
 * @property string|null $top_text
 * @property string|null $top_description
 * @property string $block_title
 * @property string|null $block_subtitle
 * @property string|null $block_first_image
 * @property string $block_feature_1_title
 * @property string $block_feature_1_subtitle
 * @property string $block_feature_2_title
 * @property string $block_feature_2_subtitle
 * @property string $block_feature_3_title
 * @property string $block_feature_3_subtitle
 * @property string|null $block_content_caption
 * @property string|null $block_content
 * @property string|null $block_second_image
 * @property string $about_company_title
 * @property string|null $about_company_content
 * @property string|null $about_company_image
 */
class MainPage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'main_page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['top_text', 'top_description', 'block_subtitle', 'block_content_caption', 'block_content', 'about_company_content'], 'string'],
            [['block_title', 'block_feature_1_title', 'block_feature_1_subtitle', 'block_feature_2_title', 'block_feature_2_subtitle', 'block_feature_3_title', 'block_feature_3_subtitle', 'about_company_title'], 'required'],
            [['block_title', 'block_first_image', 'block_feature_1_title', 'block_feature_1_subtitle', 'block_feature_2_title', 'block_feature_2_subtitle', 'block_feature_3_title', 'block_feature_3_subtitle', 'block_second_image', 'about_company_title', 'about_company_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'top_text' => 'Левый контент',
            'top_description' => 'Правый контент',
            'block_title' => 'Заголовок блока',
            'block_subtitle' => 'Подзаголовок блока',
            'block_first_image' => 'Первое изображение',
            'block_feature_1_title' => 'Заголовок - характерстики 1',
            'block_feature_1_subtitle' => 'Подзаголовок - характерстики 1',
            'block_feature_2_title' => 'Заголовок - характерстики 2',
            'block_feature_2_subtitle' => 'Подзаголовок - характерстики 2',
            'block_feature_3_title' => 'Заголовок - характерстики 3',
            'block_feature_3_subtitle' => 'Подзаголовок - характерстики 3',
            'block_content_caption' => 'Заголовок контента',
            'block_content' => 'Контент блока',
            'block_second_image' => 'Второе изображение',
            'about_company_title' => 'О нас - Заголовок',
            'about_company_content' => 'О нас - Содержимое',
            'about_company_image' => 'О нас - Изображение',
        ];
    }
    public static function findOneExistingModel()
    {
        return static::find()->one();
    }
}
