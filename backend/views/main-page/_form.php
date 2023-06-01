<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\MainPage $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="main-page-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                        <?= $form->field($model, 'main_top_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'main_top_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'main_block_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'main_block_subtitle')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'main_block_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'main_block_feature_1_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'main_block_feature_1_subtitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'main_block_feature_2_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'main_block_feature_2_subtitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'main_block_feature_3_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'main_block_feature_3_subtitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'second_block_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'second_block_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about_company_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about_company_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'about_company_image')->textInput(['maxlength' => true]) ?>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body"></div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
