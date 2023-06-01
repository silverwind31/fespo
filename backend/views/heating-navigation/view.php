<?php

use common\components\StaticFunctions;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\HeatingNavigation $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Навигация', 'url' => ['index']];
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
            'section_id',
            [
                'attribute' => 'image',
                'value' => function($data) {
                    $image = StaticFunctions::getImage($data->image, 'heating-navigation', $data->id);
                    return "<img src='$image' style='max-height: 150px' alt='" . $data->image . "'>";
                },
                'format' => "html"
            ],
            'order_by',
        ],
        ]) ?>
    </div>
</div>
