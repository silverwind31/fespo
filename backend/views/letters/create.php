<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Letters $model */

$this->title = 'Создать письмо';
$this->params['breadcrumbs'][] = ['label' => 'Письмена', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="letters-create">

    <h1 class="mb-3"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
