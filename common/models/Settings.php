<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property int $id
 * @property string $name
 * @property string $value
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'value'], 'required'],
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
            'name' => 'Название',
            'value' => 'Значение',
        ];
    }
    public static function getAllSettings()
    {
        $settings = self::find()->asArray()->all();
        $result = [];

        foreach ($settings as $setting) {
            $result[$setting['name']] = $setting['value'];
        }

        return $result;
    }
}
