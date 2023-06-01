<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\HeatingSlider $model */

$this->title = 'Create Heating Slider';
$this->params['breadcrumbs'][] = ['label' => 'Heating Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="heating-slider-create">

    <h1 class="mb-3"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
