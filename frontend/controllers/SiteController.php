<?php

namespace frontend\controllers;

use common\models\PromoSlider;
use common\models\Settings;
use Yii;

/**
 * Site controller
 */
class SiteController extends MainController
{
    public function actionIndex()
    {
        Yii::$app->view->params['currentRoute'] = 'site/index';
        $promoSliderModel = new PromoSlider();
        $promoSlides = $promoSliderModel->getAllSlides();

        return $this->render('index', [
            'promoSlides' => $promoSlides,
        ]);
    }
    public function actionAboutUs()
    {
        return $this->render('about-us');
    }
    public function actionContacts(){
        $settings = Settings::getAllSettings();
        return $this->render('contacts', [
            'settings' => $settings
        ]);
    }
    public function actionFieldHeating(){
        return $this->render('field-heating');
    }
}
