<?php


namespace frontend\controllers;


use common\models\Projects;
use yii\data\Pagination;

class ProjectsController extends MainController
{
    public function actionIndex(){
        $projectsModel = new Projects();

        $pagination = new Pagination([
            'totalCount' => $projectsModel->getTotalProjectsCount(),
            'pageSize' => 9,
        ]);

        $models = $projectsModel->getPaginatedProjects($pagination);

        return $this->render('index', [
            'models' => $models,
            'pagination' => $pagination,
        ]);
    }
    public function actionView($id)
    {
        $model = Projects::findOne($id);

        if ($model) {
            $projectStats = $model->getProjectStats();

            return $this->render('view', [
                'model' => $model,
                'projectStats' => $projectStats,
            ]);
        } else {
            return $this->redirect(['/error']);
        }
    }

}