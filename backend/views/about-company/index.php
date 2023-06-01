<?php

use common\models\AboutCompany;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\AboutCompanySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
/** @var \common\models\AboutCompany|null $existingModel */

$this->title = 'О компании';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h1><?= Html::encode($this->title) ?></h1>
        <?php
        if ($existingModel !== null) {
            echo Html::a('Обновить данные', ['update', 'id' => $existingModel->id], ['class' => 'btn btn-primary']);
        } else {
            echo Html::a('Добавить данные', ['create'], ['class' => 'btn btn-success']);
        }
        ?>
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
                'block_left_content:ntext',
//                'block_right_content:ntext',
//                'main_image',
                //'block_middle_content:ntext',
                [
                    'attribute' => 'info_image',
                    'value' => function($data) {
                        $image = \common\components\StaticFunctions::getImage($data->info_image, 'about-company', $data->id);
                        return "<img src='$image' style='max-width: 150px' alt='{$data->info_image}'>";
                    },
                    'format' => "html"
                ],
                //'block_bottom_description:ntext',
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
        ]); ?>
    </div>
</div>
