<?php

namespace frontend\widgets;

use common\models\Orders;
use yii\base\Widget;

class Modal extends Widget
{
    public function run()
    {
        $model = new Orders();

        return $this->render('modal', [
            'model' => $model,
        ]);
    }
}