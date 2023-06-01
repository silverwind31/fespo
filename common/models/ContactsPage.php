<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contacts_page".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $address
 * @property string $legal_address
 * @property string $email
 * @property string $phone_1
 * @property string $phone_2
 * @property string $requisites
 * @property string $location
 */
class ContactsPage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts_page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'address', 'legal_address', 'email', 'phone_1', 'phone_2', 'requisites', 'location'], 'required'],
            [['description', 'location'], 'string'],
            [['title', 'address', 'legal_address', 'email', 'requisites'], 'string', 'max' => 255],
            [['phone_1', 'phone_2'], 'string', 'max' => 20],
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
            'description' => 'Содержимое',
            'address' => 'Адрес',
            'legal_address' => 'Юридичекий адрес',
            'email' => 'Email',
            'phone_1' => 'Телефонный номер 1',
            'phone_2' => 'Телефонный номер 2',
            'requisites' => 'Реквизиты',
            'location' => 'Локация'
        ];
    }
    public static function findOneExistingModel()
    {
        return static::find()->one();
    }
}
