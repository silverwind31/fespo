<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use common\models\User;

/** @var yii\web\View $this */
/** @var common\models\User $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="user-form mb-3">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                    <?php if ($model->id !== 1) { ?>
                        <?= $form->field($model, 'status')->dropDownList(User::getStatusOptions()) ?>
                    <?php } else { ?>
                        <?= $form->field($model, 'status')->dropDownList(User::getStatusOptions(), ['disabled' => true]) ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>