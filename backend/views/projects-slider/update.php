<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ProjectsSlider $model */

$this->title = 'Обновить: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Слайдер - проекты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="projects-slider-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
