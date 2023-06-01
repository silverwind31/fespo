<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\MainSlider $model */

$this->title = 'Create Main Slider';
$this->params['breadcrumbs'][] = ['label' => 'Main Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-slider-create">

    <h1 class="mb-3"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
