<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\AboutCompany $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'О компании', 'url' => ['index']];
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
            'title',
            'block_left_content:ntext',
            'block_right_content:ntext',
            [
                'attribute' => 'main_image',
                'value' => function($data) {
                    $image = \common\components\StaticFunctions::getImage($data->main_image, 'about-company', $data->id);
                    return "<img src='$image' style='max-height: 200px' alt='{$data->main_image}'>";
                },
                'format' => "html"
            ],
            'block_middle_content:ntext',
            [
                'attribute' => 'info_image',
                'value' => function($data) {
                    $image = \common\components\StaticFunctions::getImage($data->info_image, 'about-company', $data->id);
                    return "<img src='$image' style='max-width: 150px' alt='{$data->info_image}'>";
                },
                'format' => "html"
            ],
            'block_bottom_description:ntext',
        ],
        ]) ?>
    </div>
</div>
