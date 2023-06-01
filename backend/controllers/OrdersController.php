<?php

namespace backend\controllers;

use common\models\Orders;
use common\models\OrdersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use Yii;
use yii\filters\VerbFilter;

/**
 * OrdersController implements the CRUD actions for Orders model.
 */
class OrdersController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            []
        );
    }

    /**
     * Lists all Orders models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new OrdersSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        $dataProvider->pagination->pageSize = 10;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Orders model.
     *
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

        if ($model->status == 1) {
            $model->status = 2;
            $model->save();
        }

        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Finds the Orders model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param int $id ID
     * @return Orders the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Orders::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Changes the status of an order to "Rejected".
     *
     * @param int $id ID
     * @return \yii\web\Response
     */
    public function actionReject($id)
    {
        $model = Orders::findOne($id);

        if ($model) {
            $model->status = 3;
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Статус заказа изменен на "Отклонен".');
            } else {
                Yii::$app->session->setFlash('error', 'Не удалось изменить статус заказа.');
            }
        } else {
            Yii::$app->session->setFlash('error', 'Заказ не найден.');
        }

        return $this->redirect(['index']);
    }

    /**
     * Changes the status of an order to "Sold".
     *
     * @param int $id ID
     * @return \yii\web\Response
     */
    public function actionSold($id)
    {
        $model = Orders::findOne($id);

        if ($model) {
            $model->status = 4;
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Статус заказа изменен на "Принято".');
            } else {
                Yii::$app->session->setFlash('error', 'Не удалось изменить статус заказа.');
            }
        } else {
            Yii::$app->session->setFlash('error', 'Order not found.');
        }

        return $this->redirect(['index']);
    }
}
