<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\PromoSlider $model */

$this->title = 'Update Promo Slider: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Promo Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="promo-slider-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
