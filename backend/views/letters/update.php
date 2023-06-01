<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Letters $model */

$this->title = 'Update Letters: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Letters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="letters-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
