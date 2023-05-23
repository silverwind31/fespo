<?php


namespace backend\widgets;


use common\models\Testimonials;
use yii\base\Widget;

class Sidebar extends Widget
{

    public function run()
    {
        return $this->render('sidebar');
    }
}