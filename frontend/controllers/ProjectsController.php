<?php


namespace frontend\controllers;


class ProjectsController extends MainController
{
    public function actionIndex(){
        return $this->render('index');
    }
}