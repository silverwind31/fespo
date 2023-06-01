<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\AboutCompanySearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="about-company-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'block_left_content') ?>

    <?= $form->field($model, 'block_right_content') ?>

    <?= $form->field($model, 'main_image') ?>

    <?php // echo $form->field($model, 'block_middle_content') ?>

    <?php // echo $form->field($model, 'info_image') ?>

    <?php // echo $form->field($model, 'block_bottom_description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
