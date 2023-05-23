<?php

namespace frontend\widgets;

use common\models\Menu;
use common\models\Settings;
use Yii;

class Header extends \yii\base\Widget
{
    public function run()
    {
        $menuModel = new Menu();
        $frontMenus = $menuModel->getFrontMenus();
        $settings = Settings::getAllSettings();

        return $this->render('header', [
            'frontMenus' => $frontMenus,
            'settings' => $settings,
        ]);
    }
}