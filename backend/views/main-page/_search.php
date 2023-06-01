<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\MainPageSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="main-page-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'top_text') ?>

    <?= $form->field($model, 'top_description') ?>

    <?= $form->field($model, 'block_title') ?>

    <?= $form->field($model, 'block_subtitle') ?>

    <?php // echo $form->field($model, 'block_first_image') ?>

    <?php // echo $form->field($model, 'block_feature_1_title') ?>

    <?php // echo $form->field($model, 'block_feature_1_subtitle') ?>

    <?php // echo $form->field($model, 'block_feature_2_title') ?>

    <?php // echo $form->field($model, 'block_feature_2_subtitle') ?>

    <?php // echo $form->field($model, 'block_feature_3_title') ?>

    <?php // echo $form->field($model, 'block_feature_3_subtitle') ?>

    <?php // echo $form->field($model, 'block_content_caption') ?>

    <?php // echo $form->field($model, 'block_content') ?>

    <?php // echo $form->field($model, 'block_second_image') ?>

    <?php // echo $form->field($model, 'about_company_title') ?>

    <?php // echo $form->field($model, 'about_company_content') ?>

    <?php // echo $form->field($model, 'about_company_image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
