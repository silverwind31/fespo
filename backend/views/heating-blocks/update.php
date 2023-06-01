<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\HeatingBlocks $model */

$this->title = 'Update Heating Blocks: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Heating Blocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="heating-blocks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
