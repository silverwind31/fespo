<?php

use common\models\MainPage;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\MainPageSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Main Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h1><?= Html::encode($this->title) ?></h1>
        <?= Html::a('Create Main Page', ['create'], ['class' => 'btn btn-success']) ?>
    </div>
    <div class="card-body">
                            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        
                    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
            'contentOptions' => ['class' => 'align-middle'],
            ],

                        'id',
            'main_top_text:ntext',
            'main_top_description:ntext',
            'main_block_title',
            'main_block_subtitle:ntext',
            //'main_block_image',
            //'main_block_feature_1_title',
            //'main_block_feature_1_subtitle',
            //'main_block_feature_2_title',
            //'main_block_feature_2_subtitle',
            //'main_block_feature_3_title',
            //'main_block_feature_3_subtitle',
            //'second_block_content:ntext',
            //'second_block_image',
            //'about_company_title',
            //'about_company_content:ntext',
            //'about_company_image',
            [
            'class' => 'yii\grid\ActionColumn',
            'header' => 'Actions',
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
