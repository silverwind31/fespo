<?php


namespace frontend\widgets;


use yii\base\Widget;

class MainAbout extends Widget
{
    public function run()
    {
        return $this->render('main-about');
    }
}