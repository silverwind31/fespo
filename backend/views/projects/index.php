<?php

use common\components\StaticFunctions;
use yii\helpers\Html;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\ProjectsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Проекты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h1><?= Html::encode($this->title) ?></h1>
        <?= Html::a('Добавить проект', ['create'], ['class' => 'btn btn-success']) ?>
    </div>
    <div class="card-body">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                [
                    'class' => 'yii\grid\SerialColumn',
                    'contentOptions' => ['class' => 'align-middle'],
                ],
//                'id',
                'name',
//                'description',
//                'content:ntext',
                [
                    'attribute' => 'image',
                    'value' => function($data) {
                        $image = StaticFunctions::getImage($data->image, 'projects', $data->id);
                        return "<img src='$image' style='max-width: 150px' alt='{$data->image}'>";
                    },
                    'format' => "html"
                ],
                [
                    'attribute' => 'status',
                    'format' => 'html',
                    'value' => function ($model) {
                        return Html::tag('div', $model->status ? 'Активен' : 'Не активен', [
                            'class' => $model->status ? 'alert alert-success mb-0' : 'alert alert-danger mb-0'
                        ]);
                    },
                ],
                'slug',
                //'project_garantees_title',
                //'project_garantees_description_1:ntext',
                //'project_garantees_description_2:ntext',
                //'order_by',
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
                                <a href="/{$controller}/delete?id={$model->id}" class="btn btn-danger" onclick="return confirm('Вы уверены, что хотите удалить этот элемент?');"><i class="fas fa-trash"></i></a>
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
