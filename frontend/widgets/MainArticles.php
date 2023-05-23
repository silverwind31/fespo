<?php


namespace frontend\widgets;


use common\components\StaticFunctions;
use common\models\Articles;
use Yii;
use yii\base\Widget;

class MainArticles extends Widget
{
    public function run(){
        $ArticlesModel = new Articles();
        $models = $ArticlesModel->getMainArticles();
        $months = Yii::$app->params['months'];

        foreach ($models as $model) {
            $model->published_date = StaticFunctions::formatPublishedDate($model->published_date);
        }
        return $this->render('main-articles',[
            'models' => $models
        ]);
    }
}