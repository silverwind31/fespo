<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\WorkSlider $model */

$this->title = 'Create Work Slider';
$this->params['breadcrumbs'][] = ['label' => 'Work Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-slider-create">

    <h1 class="mb-3"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
