<?php


namespace frontend\widgets;


use common\components\StaticFunctions;
use common\models\Articles;
use yii\base\Widget;
use yii\data\Pagination;

class AllArticles extends Widget
{
    public function run()
    {
        $articlesModel = new Articles();

        $totalCount = $articlesModel->getTotalArticlesCount();

        $pagination = new Pagination([
            'totalCount' => $totalCount,
            'pageSize' => 9,
        ]);

        $models = $articlesModel->getPaginatedArticles($pagination);

        foreach ($models as $model) {
            $model->published_date = StaticFunctions::formatPublishedDate($model->published_date);
        }

        return $this->render('all-articles', [
            'models' => $models,
            'pagination' => $pagination,
        ]);
    }
}