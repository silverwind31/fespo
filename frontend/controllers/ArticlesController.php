<?php


namespace frontend\controllers;


use common\components\StaticFunctions;
use common\models\Articles;

class ArticlesController extends MainController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionView($id)
    {
        $model = new Articles();
        $model = $model->findById($id);

        if ($model !== null) {
            $model->published_date = StaticFunctions::formatPublishedDate($model->published_date);

            return $this->render('view', [
                'model' => $model
            ]);
        } else {
            return $this->redirect(['/error']);
        }
    }
}