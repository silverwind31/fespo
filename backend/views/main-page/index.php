<?php

use common\models\MainPage;
use yii\helpers\Html;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\MainPageSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
/** @var MainPage|null $existingModel */

$this->title = 'Главная страница';
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
//                'top_text:ntext',
//                'top_description:ntext',
                'block_title',
                'block_subtitle:ntext',
                //'block_first_image',
                //'block_feature_1_title',
                //'block_feature_1_subtitle',
                //'block_feature_2_title',
                //'block_feature_2_subtitle',
                //'block_feature_3_title',
                //'block_feature_3_subtitle',
                //'block_content_caption:ntext',
                //'block_content:ntext',
                //'block_second_image',
                //'about_company_title',
                //'about_company_content:ntext',
                //'about_company_image',
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
