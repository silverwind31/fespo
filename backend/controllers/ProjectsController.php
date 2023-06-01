<?php

namespace backend\controllers;

use common\components\StaticFunctions;
use common\models\Model;
use common\models\Projects;
use common\models\ProjectsSearch;
use common\models\ProjectStats;
use yii\bootstrap5\ActiveForm;
use yii\db\Exception;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\web\UploadedFile;

/**
 * ProjectsController implements the CRUD actions for Projects model.
 */
class ProjectsController extends Controller
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
     * Lists all Projects models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProjectsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        $dataProvider->pagination->pageSize = 10;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Projects model.
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
     * Creates a new Projects model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Projects();
        $projectStats = [new ProjectStats()];

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                $projectStats = Model::createMultiple(ProjectStats::classname());
                Model::loadMultiple($projectStats, Yii::$app->request->post());

                // ajax validation
                if (Yii::$app->request->isAjax) {
                    Yii::$app->response->format = Response::FORMAT_JSON;
                    return ArrayHelper::merge(
                        ActiveForm::validateMultiple($projectStats),
                        ActiveForm::validate($model)
                    );
                }

                $valid = $model->validate();
                $valid = Model::validateMultiple($projectStats) && $valid;

                if ($valid) {
                    $transaction = \Yii::$app->db->beginTransaction();
                    try {
                        if ($flag = $model->save(false)) {
                            foreach ($projectStats as $projectStat) {
                                $projectStat->project_id = $model->id;
                                if (! ($flag = $projectStat->save(false))) {
                                    $transaction->rollBack();
                                    break;
                                }
                            }
                        }
                        if ($flag) {
                            $transaction->commit();

                        }
                    } catch (Exception $e) {
                        $transaction->rollBack();
                    }
                }

                $image = UploadedFile::getInstance($model,'image');
                if($image){
                    $model->image = StaticFunctions::saveImage($image,'projects',$model->id);
                }
                if($model->save()){
                    \Yii::$app->session->setFlash('success','Успешно добавлено!');
                    return $this->redirect(['index']);
                }else{
                    return false;
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'projectStats'=>(empty($projectStats)) ? [new ProjectStats()] : $projectStats
        ]);
    }

    /**
     * Updates an existing Projects model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $oldImage = $model->image;
        $projectStats = $model->projectStats;
        if ($this->request->isPost && $model->load($this->request->post())) {

            $oldIDs = ArrayHelper::map($projectStats, 'id', 'id');
            $projectStats = Model::createMultiple(ProjectStats::classname(), $projectStats);
            Model::loadMultiple($projectStats, Yii::$app->request->post());
            $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($projectStats, 'id', 'id')));

            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($projectStats),
                    ActiveForm::validate($model)
                );
            }

            $valid = $model->validate();
            $valid = Model::validateMultiple($projectStats) && $valid;


            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        if (! empty($deletedIDs)) {
                            ProjectStats::deleteAll(['id' => $deletedIDs]);
                        }
                        foreach ($projectStats as $projectStat) {
                            $projectStat->project_id = $model->id;
                            if (! ($flag = $projectStat->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();

                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }

            $image = UploadedFile::getInstance($model,'image');
            if($image){
                $model->image = StaticFunctions::saveImage($image,'projects',$model->id);
                StaticFunctions::deleteImage($oldImage,'projects',$model->id);
            }else{
                $model->image = $oldImage;
            }
            if($model->save()){
                \Yii::$app->session->setFlash('success','Успешно обновлено!');
                return $this->redirect(['index']);
            }
        }

        return $this->render('update', [
            'model' => $model,
            'projectStats'=>(empty($projectStats)) ? [new ProjectStats()] : $projectStats
        ]);
    }


    /**
     * Deletes an existing Projects model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $image = $model->image;

        $stats = ProjectStats::find()->where(['project_id' => $id])->all();
        foreach ($stats as $stat) {
            $stat->delete();
        }

        if ($model->delete()) {
            StaticFunctions::deleteImage($image, 'projects', $model->id);
            return $this->redirect(['index']);
        } else {
            print_r($model->errors);
        }
    }
    /**
     * Finds the Projects model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Projects the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Projects::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}



