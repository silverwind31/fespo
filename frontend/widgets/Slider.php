<?php


namespace frontend\widgets;


use common\models\ProjectsSlider;
use yii\base\Widget;

class PromoSlider extends Widget
{
    public $type;

    public function run()
    {
        $promoSliderModel = new \common\models\PromoSlider();
        $promoSlides = $promoSliderModel->getAllSlides();

        $projectsSliderModel = new ProjectsSlider();
        $projectsSlides = $projectsSliderModel->getAllSlides();

        if ($this->type === 'promo') {
            return $this->render('promo-slider', [
                'promoSlides' => $promoSlides,
            ]);
        } elseif ($this->type === 'project') {
            return $this->render('project-slider', [
                'projectsSlides' => $projectsSlides,
            ]);
        }
    }
}