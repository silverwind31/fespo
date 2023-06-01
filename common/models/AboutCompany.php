<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about_company".
 *
 * @property int $id
 * @property string $title
 * @property string|null $block_left_content
 * @property string|null $block_right_content
 * @property string|null $main_image
 * @property string|null $block_middle_content
 * @property string|null $info_image
 * @property string|null $block_bottom_description
 */
class AboutCompany extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about_company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['block_left_content', 'block_right_content', 'block_middle_content', 'block_bottom_description'], 'string'],
            [['title', 'main_image', 'info_image'], 'string', 'max' => 255],
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
            'block_left_content' => 'Block Left Content',
            'block_right_content' => 'Block Right Content',
            'main_image' => 'Main Image',
            'block_middle_content' => 'Block Middle Content',
            'info_image' => 'Info Image',
            'block_bottom_description' => 'Block Bottom Description',
        ];
    }
}
