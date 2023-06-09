<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\HeatingNavigation $model */

$this->title = 'Добавить новый';
$this->params['breadcrumbs'][] = ['label' => 'Навигация', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="heating-navigation-create">

    <h1 class="mb-3"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
