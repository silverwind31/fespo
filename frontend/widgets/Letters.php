<?php


namespace frontend\widgets;


use yii\base\Widget;

class Letters extends Widget
{
    public function run(){
        $lettersModel = new \common\models\Letters();
        $letters = $lettersModel->getAllLetters();
        return $this->render('letters', [
            'letters' => $letters
        ]);
    }
}