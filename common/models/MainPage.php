<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "main_page".
 *
 * @property int $id
 * @property string|null $main_top_text
 * @property string|null $main_top_description
 * @property string $main_block_title
 * @property string|null $main_block_subtitle
 * @property string|null $main_block_image
 * @property string $main_block_feature_1_title
 * @property string $main_block_feature_1_subtitle
 * @property string $main_block_feature_2_title
 * @property string $main_block_feature_2_subtitle
 * @property string $main_block_feature_3_title
 * @property string $main_block_feature_3_subtitle
 * @property string|null $second_block_content
 * @property string|null $second_block_image
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
            [['main_top_text', 'main_top_description', 'main_block_subtitle', 'second_block_content', 'about_company_content'], 'string'],
            [['main_block_title', 'main_block_feature_1_title', 'main_block_feature_1_subtitle', 'main_block_feature_2_title', 'main_block_feature_2_subtitle', 'main_block_feature_3_title', 'main_block_feature_3_subtitle', 'about_company_title'], 'required'],
            [['main_block_title', 'main_block_image', 'main_block_feature_1_title', 'main_block_feature_1_subtitle', 'main_block_feature_2_title', 'main_block_feature_2_subtitle', 'main_block_feature_3_title', 'main_block_feature_3_subtitle', 'second_block_image', 'about_company_title', 'about_company_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'main_top_text' => 'Main Top Text',
            'main_top_description' => 'Main Top Description',
            'main_block_title' => 'Main Block Title',
            'main_block_subtitle' => 'Main Block Subtitle',
            'main_block_image' => 'Main Block Image',
            'main_block_feature_1_title' => 'Main Block Feature 1 Title',
            'main_block_feature_1_subtitle' => 'Main Block Feature 1 Subtitle',
            'main_block_feature_2_title' => 'Main Block Feature 2 Title',
            'main_block_feature_2_subtitle' => 'Main Block Feature 2 Subtitle',
            'main_block_feature_3_title' => 'Main Block Feature 3 Title',
            'main_block_feature_3_subtitle' => 'Main Block Feature 3 Subtitle',
            'second_block_content' => 'Second Block Content',
            'second_block_image' => 'Second Block Image',
            'about_company_title' => 'About Company Title',
            'about_company_content' => 'About Company Content',
            'about_company_image' => 'About Company Image',
        ];
    }
}
