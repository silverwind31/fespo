<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\HeatingNavigation $model */

$this->title = 'Update Heating Navigation: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Heating Navigations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="heating-navigation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
