<?php

use common\components\StaticFunctions;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\HeatingSlider $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="heating-slider-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="preview-container d-flex flex-column mb-3">
                        <label>
                            <?= $form->field($model, 'image', ['options' => ['class' => 'mb-2']])->fileInput(['hidden' => true, 'class' => 'preview'])->label(true) ?>
                            <?php $image = StaticFunctions::getImage($model->image, 'heating-slider', $model->id)?>
                            <div class="preview-image d-flex justify-content-center mb-2">
                                <img src="<?= $image ?>" alt="no photo" style="max-width: 100%; height: 200px;">
                            </div>
                            <div class="d-flex gap-2 justify-content-center">
                                <div class="btn btn-primary w-100 d-flex gap-2 align-items-center justify-content-center">
                                    <i class="fa fa-file-upload"></i>
                                    Выбрать ...
                                </div>
                                <button type="button" class="btn btn-danger w-100 reset-button d-flex gap-2 align-items-center justify-content-center">
                                    <i class="fa fa-trash"></i>
                                    Удалить
                                </button>
                            </div>
                        </label>
                    </div>
                    <?= $form->field($model, 'status', ['options' => ['class' => 'mb-0']])->checkbox([
                        'data-plugin' => 'switchery',
                        'data-color' => '#98a6ad',
                        'data-size' => 'small',
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
