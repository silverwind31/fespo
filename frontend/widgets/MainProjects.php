<?php


namespace frontend\widgets;


use common\models\Projects;
use yii\base\Widget;

class MainProjects extends Widget
{
    public function run()
    {
        $projectModels = new Projects();
        $models = $projectModels->getRandomProjects(5);

        return $this->render('main-projects',[
            'models' => $models
        ]);
    }
}