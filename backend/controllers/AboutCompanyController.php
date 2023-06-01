<?php

namespace backend\controllers;

use common\components\StaticFunctions;
use common\models\AboutCompany;
use common\models\AboutCompanySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

/**
 * AboutCompanyController implements the CRUD actions for AboutCompany model.
 */
class AboutCompanyController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
        );
    }

    /**
     * Lists all AboutCompany models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AboutCompanySearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        $dataProvider->pagination->pageSize = 10;

        $existingModel = AboutCompany::findOneExistingModel();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'existingModel' => $existingModel,
        ]);
    }

    /**
     * Displays a single AboutCompany model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AboutCompany model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $existingModel = AboutCompany::findOneExistingModel();

        if ($existingModel !== null) {
            throw new NotFoundHttpException();
        }

        $model = new AboutCompany();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                $mainImage = UploadedFile::getInstance($model, 'main_image');
                $infoImage = UploadedFile::getInstance($model, 'info_image');
                if ($mainImage) {
                    $model->main_image = StaticFunctions::saveImage($mainImage, 'about-company', $model->id);
                }
                if ($infoImage) {
                    $model->info_image = StaticFunctions::saveImage($infoImage, 'about-company', $model->id);
                }

                if ($model->save()) {
                    \Yii::$app->session->setFlash('success', 'Успешно добавлено!');
                    return $this->redirect(['index']);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AboutCompany model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldMainImage = $model->main_image;
        $oldInfoImage = $model->info_image;

        if ($this->request->isPost && $model->load($this->request->post())) {
            $mainImage = UploadedFile::getInstance($model, 'main_image');
            $infoImage = UploadedFile::getInstance($model, 'info_image');

            if ($mainImage) {
                $model->main_image = StaticFunctions::saveImage($mainImage, 'about-company', $model->id);
                StaticFunctions::deleteImage($oldMainImage, 'about-company', $model->id);
            } else {
                $model->main_image = $oldMainImage;
            }

            if ($infoImage) {
                $model->info_image = StaticFunctions::saveImage($infoImage, 'about-company', $model->id);
                StaticFunctions::deleteImage($oldInfoImage, 'about-company', $model->id);
            } else {
                $model->info_image = $oldInfoImage;
            }

            if ($model->save()) {
                \Yii::$app->session->setFlash('success', 'Успешно обновлено!');
                return $this->redirect(['index']);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AboutCompany model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $mainImage = $model->main_image;
        $infoImage = $model->info_image;

        if($model->delete()){
            StaticFunctions::deleteImage($mainImage,'about-company',$model->id);
            StaticFunctions::deleteImage($infoImage,'about-company',$model->id);
            return $this->redirect(['index']);
        }else{
            print_r($model->errors);
        }
    }

    /**
     * Finds the AboutCompany model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return AboutCompany the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AboutCompany::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
