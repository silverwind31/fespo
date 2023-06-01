<?php


namespace frontend\widgets;

use common\models\ContactsPage;
use yii\base\Widget;

class MainContacts extends Widget
{
    public function run(){
        $contactsPageModel = ContactsPage::findOneExistingModel();
        return $this->render('main-contacts', [
            'contactsPageModel' => $contactsPageModel,
        ]);
    }
}