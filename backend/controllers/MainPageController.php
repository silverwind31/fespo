<?php

namespace backend\controllers;

use common\components\StaticFunctions;
use common\models\MainPage;
use common\models\MainPageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

/**
 * MainPageController implements the CRUD actions for MainPage model.
 */
class MainPageController extends Controller
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
     * Lists all MainPage models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MainPageSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        $dataProvider->pagination->pageSize = 10;
        $existingModel = MainPage::findOneExistingModel();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'existingModel' => $existingModel,
        ]);
    }

    /**
     * Displays a single MainPage model.
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
     * Creates a new MainPage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $existingModel = MainPage::findOneExistingModel();

        if ($existingModel !== null) {
            throw new NotFoundHttpException();
        }
        $model = new MainPage();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {

                $firstImage = UploadedFile::getInstance($model, 'block_first_image');
                $secondImage = UploadedFile::getInstance($model, 'block_second_image');
                $companyImage = UploadedFile::getInstance($model, 'about_company_image');

                if ($firstImage) {
                    $model->block_first_image = StaticFunctions::saveImage($firstImage, 'main-page', $model->id);
                }
                if ($secondImage) {
                    $model->block_second_image = StaticFunctions::saveImage($secondImage, 'main-page', $model->id);
                }
                if ($companyImage) {
                    $model->about_company_image = StaticFunctions::saveImage($companyImage, 'main-page', $model->id);
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
     * Updates an existing MainPage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldFirstImage = $model->block_first_image;
        $oldSecondImage = $model->block_second_image;
        $oldCompanyImage = $model->about_company_image;

        if ($this->request->isPost && $model->load($this->request->post())) {
            $firstImage = UploadedFile::getInstance($model, 'block_first_image');
            $secondImage = UploadedFile::getInstance($model, 'block_second_image');
            $companyImage = UploadedFile::getInstance($model, 'about_company_image');

            if ($firstImage) {
                $model->block_first_image = StaticFunctions::saveImage($firstImage, 'main-page', $model->id);
                StaticFunctions::deleteImage($oldFirstImage, 'main-page', $model->id);
            } else {
                $model->block_first_image = $oldFirstImage;
            }

            if ($secondImage) {
                $model->block_second_image = StaticFunctions::saveImage($secondImage, 'main-page', $model->id);
                StaticFunctions::deleteImage($oldSecondImage, 'main-page', $model->id);
            } else {
                $model->block_second_image = $oldSecondImage;
            }

            if ($companyImage) {
                $model->about_company_image = StaticFunctions::saveImage($companyImage, 'main-page', $model->id);
                StaticFunctions::deleteImage($oldCompanyImage, 'main-page', $model->id);
            } else {
                $model->about_company_image = $oldCompanyImage;
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
     * Deletes an existing MainPage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        $firstImage = UploadedFile::getInstance($model, 'block_first_image');
        $secondImage = UploadedFile::getInstance($model, 'block_second_image');
        $companyImage = UploadedFile::getInstance($model, 'about_company_image');

        if ($model->delete()) {
            StaticFunctions::deleteImage($firstImage, 'main-page', $model->id);
            StaticFunctions::deleteImage($secondImage, 'main-page', $model->id);
            StaticFunctions::deleteImage($companyImage, 'main-page', $model->id);

            return $this->redirect(['index']);
        } else {
            print_r($model->errors);
        }
    }

    /**
     * Finds the MainPage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return MainPage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MainPage::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

