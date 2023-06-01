<?php

namespace frontend\controllers;

use common\models\AboutCompany;
use common\models\ContactsPage;
use common\models\HeatingBlocks;
use common\models\HeatingNavigation;
use common\models\MainPage;
use Yii;

/**
 * Site controller
 */
class SiteController extends MainController
{
    public function actionIndex()
    {
        Yii::$app->view->params['currentRoute'] = 'site/index';
        $model = MainPage::findOneExistingModel();

        return $this->render('index',[
            'model' => $model
        ]);
    }
    public function actionAboutUs()
    {
        $model = AboutCompany::findOneExistingModel();
        return $this->render('about-us',[
            'model' => $model
        ]);
    }
    public function actionContacts()
    {
        $model = ContactsPage::findOneExistingModel();
        return $this->render('contacts', [
            'model' => $model
        ]);
    }
    public function actionFieldHeating(){
        $fieldModels = new HeatingBlocks();
        $models = $fieldModels->getAllBlocks();

        $navModels = new HeatingNavigation();
        $navs = $navModels->getAllNavs();
        return $this->render('field-heating', [
            'models' => $models,
            'navs' => $navs
        ]);
    }
}
