<?php


namespace frontend\controllers;


class DesignController extends MainController
{
    public function actionIndex(){
        return $this->render('index');
    }
}