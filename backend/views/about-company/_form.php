<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\AboutCompany $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="about-company-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'block_left_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'block_right_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'main_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'block_middle_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'info_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'block_bottom_description')->textarea(['rows' => 6]) ?>

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
