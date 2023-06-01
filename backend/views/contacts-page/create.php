<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ContactsPage $model */

$this->title = 'Добавить данные';
$this->params['breadcrumbs'][] = ['label' => 'Контакты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacts-page-create">

    <h1 class="mb-3"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
