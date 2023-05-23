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
        $articles = new Articles();
        $query = $articles->getAllArticles();
        $countQuery = clone $query;
        $pagination = new Pagination([
            'totalCount' => $countQuery->count(),
            'pageSize' => 9,
        ]);

        $models = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        foreach ($models as $model) {
            $model->published_date = StaticFunctions::formatPublishedDate($model->published_date);
        }

        return $this->render('all-articles', [
            'models' => $models,
            'pagination' => $pagination,
        ]);
    }
}