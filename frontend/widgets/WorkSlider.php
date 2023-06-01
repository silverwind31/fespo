<?php


namespace frontend\widgets;


use yii\base\Widget;

class WorkSlider extends Widget
{
    public function run()
    {
        $sliderModels = new \common\models\WorkSlider();
        $models = $sliderModels->getAllSlides();

        return $this->render('work-slider', [
            'models' => $models
        ]);
    }
}