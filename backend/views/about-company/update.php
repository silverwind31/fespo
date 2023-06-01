<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\AboutCompany $model */

$this->title = 'Обновить данные: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'О компании', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить данные';
?>
<div class="about-company-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
