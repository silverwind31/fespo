<?php

use common\components\StaticFunctions;
use Itstructure\CKEditor\CKEditor;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\AboutCompany $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="about-company-form mb-3">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'block_left_content')->widget(CKEditor::className(), [
                        'preset' => 'standard',
                        'clientOptions' => [
                                'height' => 200
                        ]
                    ]); ?>

                    <?= $form->field($model, 'block_right_content')->widget(CKEditor::className(), [
                        'preset' => 'standard',
                        'clientOptions' => [
                            'height' => 200
                        ]
                    ]); ?>

                    <?= $form->field($model, 'block_middle_content')->widget(CKEditor::className(), [
                        'preset' => 'standard',
                        'clientOptions' => [
                            'height' => 200
                        ]
                    ]); ?>

                    <?= $form->field($model, 'block_bottom_description')->widget(CKEditor::className(), [
                        'preset' => 'standard',
                        'clientOptions' => [
                            'height' => 200
                        ]
                    ]); ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="preview-container d-flex flex-column mb-3">
                                <label>
                                    <?= $form->field($model, 'main_image', ['options' => ['class' => 'mb-2']])->fileInput(['hidden' => true, 'class' => 'preview'])->label(true) ?>
                                    <?php $image = StaticFunctions::getImage($model->main_image, 'about-company', $model->id)?>
                                    <div class="preview-image mb-2 d-flex justify-content-center">
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
                        </div>
                        <div class="col-md-6">
                            <div class="preview-container d-flex flex-column mb-3">
                                <label>
                                    <?= $form->field($model, 'info_image', ['options' => ['class' => 'mb-2']])->fileInput(['hidden' => true, 'class' => 'preview'])->label(true) ?>
                                    <?php $image = StaticFunctions::getImage($model->info_image, 'about-company', $model->id)?>
                                    <div class="preview-image mb-2 d-flex justify-content-center">
                                        <img src="<?= $image ?>" alt="no photo" style="max-width: 100%; height: 200px;">
                                    </div>
                                    <div class="d-flex gap-2 actions">
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
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

