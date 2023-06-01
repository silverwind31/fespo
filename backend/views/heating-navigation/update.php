<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\HeatingNavigation $model */

$this->title = 'Обновить данные: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Навигация', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить данные';
?>
<div class="heating-navigation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
