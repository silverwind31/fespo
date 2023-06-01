<?php

use common\components\StaticFunctions;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\MainPage $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Главная страница', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="card">
    <div class="card-header">
        <h1><?= Html::encode($this->title) ?></h1>
        <div class="d-flex align-items-center gap-2">
            <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
            'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
            'method' => 'post',
            ],
            ]) ?>
        </div>
    </div>
    <div class="card-body">
        <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'top_text:ntext',
            'top_description:ntext',
            'block_title',
            'block_subtitle:ntext',
            [
                'attribute' => 'block_first_image',
                'value' => function($data) {
                    $first_image = StaticFunctions::getImage($data->block_first_image, 'main-page', $data->id);
                    return "<img src='$first_image' style='max-height: 200px' alt='{$data->block_first_image}'>";
                },
                'format' => "html"
            ],
            [
                'attribute' => 'block_second_image',
                'value' => function($data) {
                    $second_image = StaticFunctions::getImage($data->block_second_image, 'main-page', $data->id);
                    return "<img src='$second_image' style='max-height: 200px' alt='{$data->block_second_image}'>";
                },
                'format' => "html"
            ],
            'block_feature_1_title',
            'block_feature_1_subtitle',
            'block_feature_2_title',
            'block_feature_2_subtitle',
            'block_feature_3_title',
            'block_feature_3_subtitle',
            'block_content_caption:ntext',
            'block_content:ntext',
            'about_company_title',
            'about_company_content:ntext',
            [
                'attribute' => 'about_company_image',
                'value' => function($data) {
                    $about_image = StaticFunctions::getImage($data->about_company_image, 'main-page', $data->id);
                    return "<img src='$about_image' style='max-height: 200px' alt='{$data->about_company_image}'>";
                },
                'format' => "html"
            ],
        ],
        ]) ?>
    </div>
</div>
