<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\PromoSlider $model */

$this->title = 'Create Promo Slider';
$this->params['breadcrumbs'][] = ['label' => 'Promo Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="promo-slider-create">

    <h1 class="mb-3"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
