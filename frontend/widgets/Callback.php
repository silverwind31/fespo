<?php


namespace frontend\widgets;


use common\models\Orders;
use yii\base\Widget;
use yii\helpers\Url;

class Callback extends Widget
{
    public function run()
    {
        $model = new Orders();
        return $this->render('callback', [
            'model' => $model
        ]);
    }
}