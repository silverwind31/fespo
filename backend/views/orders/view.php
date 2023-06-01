<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Orders */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="card">
    <div class="card-header">
        <h1><?= Html::encode($this->title) ?></h1>
        <div class="d-flex align-items-center gap-2">
            <?= Html::a('Принять', ['sold', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
            <?= Html::a('Отменить', ['reject', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Вы уверены, что хотите отменить этот элемент?',
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

                        return Html::tag('span', $label, ['class' => $class]);
                    },
                ],
            ],
        ]) ?>
    </div>
</div>