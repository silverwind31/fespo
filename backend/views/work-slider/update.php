<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\WorkSlider $model */

$this->title = 'Update Work Slider: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Work Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="work-slider-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
