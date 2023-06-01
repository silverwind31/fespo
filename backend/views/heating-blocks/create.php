<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\HeatingBlocks $model */

$this->title = 'Добавить блок';
$this->params['breadcrumbs'][] = ['label' => 'Блоки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="heating-blocks-create">

    <h1 class="mb-3"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
