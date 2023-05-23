<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\PromoSlider $model */

$this->title = 'Редактировать слайд: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Слайдер - промо', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="promo-slider-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
