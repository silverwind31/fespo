<?php


namespace frontend\widgets;


use common\models\HeatingSlider;
use common\models\mainSlider;
use common\models\ProjectsSlider;
use yii\base\Widget;

class Slider extends Widget
{
    public $type;

    public function run()
    {

        if ($this->type === 'main') {

            $mainSliderModel = new mainSlider();
            $mainSlides = $mainSliderModel->getAllSlides();

            return $this->render('main-slider', [
                'mainSlides' => $mainSlides,
            ]);

        } elseif ($this->type === 'project') {

            $projectsSliderModel = new ProjectsSlider();
            $projectsSlides = $projectsSliderModel->getAllSlides();

            return $this->render('project-slider', [
                'projectsSlides' => $projectsSlides,
            ]);

        }elseif($this->type === 'heating'){

            $heatingSlidersModel = new HeatingSlider();
            $heatingSlides = $heatingSlidersModel->getAllSlides();

            return $this->render('heating-slider', [
                'heatingSlides' => $heatingSlides,
            ]);
        }
    }
}