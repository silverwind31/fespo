<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Letters $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Письмена', 'url' => ['index']];
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
            [
                'attribute' => 'image',
                'value' => function ($data) {
                    $image = \common\components\StaticFunctions::getImage($data->image, 'letters', $data->id);
                    return "<img src='$image' style='max-width: 120px' alt='" . $data->image . "'>";
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'status',
                'format' => 'html',
                'value' => function ($model) {
                    return Html::tag('span', $model->status ? 'Активен' : 'Не активен', [
                        'class' => $model->status ? 'alert alert-success mb-0' : 'alert alert-danger mb-0'
                    ]);
                },
            ],
        ],
        ]) ?>
    </div>
</div>
