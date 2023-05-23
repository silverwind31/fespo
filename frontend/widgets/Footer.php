<?php


namespace frontend\widgets;


use common\models\Menu;
use yii\base\Widget;

class Footer extends Widget
{
    public function run()
    {
        $menuModel = new Menu();
        $footerMenus = $menuModel->getFooterMenus();

        return $this->render('footer', [
            'footerMenus' => $footerMenus
        ]);
    }
}