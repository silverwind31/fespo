<?php

namespace backend\controllers;

use common\components\StaticFunctions;
use common\models\HeatingSlider;
use common\models\HeatingSliderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use Yii;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * HeatingSliderController implements the CRUD actions for HeatingSlider model.
 */
class HeatingSliderController extends Controller
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
     * Lists all HeatingSlider models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new HeatingSliderSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        $dataProvider->pagination->pageSize = 10;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HeatingSlider model.
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
     * Creates a new HeatingSlider model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new HeatingSlider();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                $image = UploadedFile::getInstance($model, 'image');
                if($image){
                    $model->image = StaticFunctions::saveImage($image, 'heating-slider', $model->id);
                }
                if($model->save()){
                    \Yii::$app->session->setFlash('success','Успешно добавлено!');
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
     * Updates an existing HeatingSlider model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImage = $model->image;

        if ($this->request->isPost && $model->load($this->request->post())) {
            $image = UploadedFile::getInstance($model, 'image');
            if($image){
                $model->image = StaticFunctions::saveImage($image, 'heating-slider',$model->id);
                StaticFunctions::deleteImage($oldImage,'heating-slider',$model->id);
            }else{
                $model->image = $oldImage;
            }

            if($model->save()){
                \Yii::$app->session->setFlash('success','Успешно обновлено!');
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing HeatingSlider model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $image = $model->image;

        if($model->delete()){
            StaticFunctions::deleteImage($image,'heating-slider',$model->id);
            return $this->redirect(['index']);
        }else{
            print_r($model->errors);
        }
    }

    /**
     * Finds the HeatingSlider model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return HeatingSlider the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = HeatingSlider::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
