<?php

namespace frontend\widgets;

use common\models\ContactsPage;
use common\models\Menu;

class Header extends \yii\base\Widget
{
    public function run()
    {
        $menuModel = new Menu();
        $frontMenus = $menuModel->getFrontMenus();

        $contactsPageModel = ContactsPage::findOneExistingModel();

        return $this->render('header', [
            'frontMenus' => $frontMenus,
            'contactsPageModel' => $contactsPageModel,
        ]);
    }
}