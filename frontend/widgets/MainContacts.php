<?php


namespace frontend\widgets;


use common\models\Settings;
use yii\base\Widget;

class MainContacts extends Widget
{
    public function run(){
        $settings = Settings::getAllSettings();
        return $this->render('main-contacts', [
            'settings' => $settings
        ]);
    }
}