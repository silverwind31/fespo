<?php

use common\models\Orders;
use yii\helpers\Html;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="card-body">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
//                'id',
                'name',
                'email',
                'phone',
                [
                    'attribute' => 'status',
                    'format' => 'html',
                    'value' => function ($model) {
                        $label = '';
                        $class = '';

                        if ($model->status == 1) {
                            $label = 'Новый';
                            $class = 'btn btn-warning';
                        } elseif ($model->status == 2) {
                            $label = 'Просмотрен';
                            $class = 'btn btn-primary';
                        } elseif ($model->status == 3) {
                            $label = 'Отклонен';
                            $class = 'btn btn-danger';
                        } elseif ($model->status == 4) {
                            $label = 'Принят';
                            $class = 'btn btn-success';
                        } else {
                            $label = 'Неизвестный статус';
                            $class = 'btn btn-secondary';
                        }

                        return Html::tag('span', $label, ['class' => 'w-100 ' . $class]);
                    },
                ],
                [
                    'class' => ActionColumn::class,
                    'header' => 'Действия',
                    'template' => '{buttons}',
                    'buttons' => [
                        'buttons' => function ($url, $model) {
                            $controller = Yii::$app->controller->id;
                            $code = <<<BUTTONS
                                <div class="d-flex align-items-center gap-1 justify-content-center">
                                    <a href="/{$controller}/sold?id={$model->id}" class="btn btn-info"><i class="fas fa-check"></i></a>
                                    <a href="/{$controller}/view?id={$model->id}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="/{$controller}/reject?id={$model->id}" class="btn btn-danger"><i class="far fa-window-close"></i></a>
                                </div>
                            BUTTONS;
                            return $code;
                        }
                    ],
                ],
            ],
            'layout' => "{items}\n<div class=\"d-flex justify-content-center\">{pager}</div>",
            'pager' => [
                'class' => 'yii\bootstrap5\LinkPager',
                'prevPageCssClass' => 'page-item',
                'nextPageCssClass' => 'page-item',
                'linkOptions' => ['class' => 'page-link'],
            ],
        ]); ?>

    </div>
</div>