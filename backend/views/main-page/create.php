<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\MainPage $model */

$this->title = 'Добавить данные';
$this->params['breadcrumbs'][] = ['label' => 'Главная страница', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-page-create">

    <h1 class="mb-3"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
