<?php

use common\components\StaticFunctions;
use yii\helpers\Html;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\HeatingNavigationSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Навигация';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h1><?= Html::encode($this->title) ?></h1>
        <?= Html::a('Добавить новый', ['create'], ['class' => 'btn btn-success']) ?>
    </div>
    <div class="card-body">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn',
                ],
//                'id',
                'title',
                'section_id',
                [
                    'attribute' => 'image',
                    'value' => function($data) {
                        $image = StaticFunctions::getImage($data->image, 'heating-navigation', $data->id);
                        return "<img src='$image' style='max-width: 150px' alt='" . $data->image . "'>";
                    },
                    'format' => "html"
                ],
                'order_by',
                [
                    'class' => 'yii\grid\ActionColumn',
                    'header' => 'Действия',
                    'template' => '{buttons}',
                    'buttons' => [
                        'buttons' => function ($url, $model) {
                            $controller = Yii::$app->controller->id;
                            $code = <<<BUTTONS
                            <div class="d-flex align-items-center gap-1 justify-content-center">
                                <a href="/{$controller}/view?id={$model->id}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="/{$controller}/update?id={$model->id}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                <a href="/{$controller}/delete?id={$model->id}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></a>
                            </div>
                            BUTTONS;
                            return $code;
                        }
                    ],
                ],
            ],
        ]); ?>
    </div>
</div>