<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $title
 * @property string $link
 * @property int $position
 * @property int $order_by
 * @property int $status
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'link', 'position', 'order_by'], 'required'],
            [['position', 'order_by', 'status'], 'integer'],
            [['title', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'link' => 'Ссылка',
            'position' => 'Позиция',
            'order_by' => 'Очередность',
            'status' => 'Статус',
        ];
    }
    public function getFrontMenus()
    {
        $menuPositions = Yii::$app->params['menu_positions'];
        $headerPositions = [1, 3];
        return self::find()->where(['status' => 1])->andWhere(['IN', 'position', $headerPositions])->all();
    }
    public function getFooterMenus()
    {
        $menuPositions = Yii::$app->params['menu_positions'];
        $footerPositions = [2, 3];
        return self::find()->where(['status' => 1])->andWhere(['IN', 'position', $footerPositions])->all();
    }
}
