<?php

use common\components\StaticFunctions;

use Itstructure\CKEditor\CKEditor;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\MainPage $model */
/** @var yii\bootstrap5\ActiveForm $form */

?>

<div class="main-page-form mb-3">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h2 fw-bold m-0">Верхние тексты</div>
                <div class="card-body">
                    <?= $form->field($model, 'top_text')->widget(CKEditor::className(), [
                            'preset' => 'full',
                            'clientOptions' => [
                                'height' => 200
                            ]
                        ]); ?>

                    <?= $form->field($model, 'top_description')->widget(CKEditor::className(), [
                        'preset' => 'full',
                        'clientOptions' => [
                            'height' => 200
                        ]
                    ]); ?>
                </div>
            </div>
            <div class="card">
                <div class="card-header h2 fw-bold m-0">Блог - подогрев полей</div>
                <div class="card-body">
                    <?= $form->field($model, 'block_title')->widget(CKEditor::className(), [
                        'preset' => 'full',
                        'clientOptions' => [
                            'height' => 200
                        ]
                    ]); ?>
                    <?= $form->field($model, 'block_subtitle')->widget(CKEditor::className(), [
                        'preset' => 'full',
                        'clientOptions' => [
                            'height' => 200
                        ]
                    ]); ?>

                    <?= $form->field($model, 'block_feature_1_title')->widget(CKEditor::className(), [
                        'preset' => 'basic',
                        'clientOptions' => [
                            'height' => 150
                        ]
                    ]); ?>
                    <?= $form->field($model, 'block_feature_1_subtitle')->widget(CKEditor::className(), [
                        'preset' => 'basic',
                        'clientOptions' => [
                            'height' => 150
                        ]
                    ]); ?>
                    <?= $form->field($model, 'block_feature_2_title')->widget(CKEditor::className(), [
                        'preset' => 'basic',
                        'clientOptions' => [
                            'height' => 150
                        ]
                    ]); ?>
                    <?= $form->field($model, 'block_feature_2_subtitle')->widget(CKEditor::className(), [
                        'preset' => 'basic',
                        'clientOptions' => [
                            'height' => 150
                        ]
                    ]); ?>
                    <?= $form->field($model, 'block_feature_3_title')->widget(CKEditor::className(), [
                        'preset' => 'basic',
                        'clientOptions' => [
                            'height' => 150
                        ]
                    ]); ?>
                    <?= $form->field($model, 'block_feature_3_subtitle')->widget(CKEditor::className(), [
                        'preset' => 'basic',
                        'clientOptions' => [
                            'height' => 150
                        ]
                    ]); ?>

                    <?= $form->field($model, 'block_content_caption')->widget(CKEditor::className(), [
                        'preset' => 'full',
                        'clientOptions' => [
                            'height' => 200
                        ]
                    ]); ?>

                    <?= $form->field($model, 'block_content')->widget(CKEditor::className(), [
                        'preset' => 'full',
                        'clientOptions' => [
                            'height' => 200
                        ]
                    ]); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="preview-container d-flex flex-column mb-3">
                                <label>
                                    <?= $form->field($model, 'block_first_image', ['options' => ['class' => 'mb-2']])->fileInput(['hidden' => true, 'class' => 'preview'])->label(true) ?>
                                    <?php $image = StaticFunctions::getImage($model->block_first_image, 'main-page', $model->id)?>
                                    <div class="preview-image d-flex justify-content-center mb-2">
                                        <img src="<?= $image ?>" alt="no photo" style="max-width: 100%; height: 200px;">
                                    </div>
                                    <div class="d-flex gap-2 actions justify-content-center">
                                        <div class="btn btn-primary d-flex w-25 gap-2 align-items-center justify-content-center">
                                            <i class="fa fa-file-upload"></i>
                                            Выбрать ...
                                        </div>
                                        <button type="button" class="btn btn-danger w-25 reset-button d-flex gap-2 align-items-center justify-content-center">
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
                                    <?= $form->field($model, 'block_second_image', ['options' => ['class' => 'mb-2']])->fileInput(['hidden' => true, 'class' => 'preview'])->label(true) ?>
                                    <?php $image = StaticFunctions::getImage($model->block_second_image, 'main-page', $model->id)?>
                                    <div class="preview-image d-flex justify-content-center mb-2">
                                        <img src="<?= $image ?>" alt="no photo" style="max-width: 100%; height: 200px;">
                                    </div>
                                    <div class="d-flex gap-2 actions justify-content-center">
                                        <div class="btn btn-primary w-25 d-flex gap-2 align-items-center justify-content-center">
                                            <i class="fa fa-file-upload"></i>
                                            Выбрать ...
                                        </div>
                                        <button type="button" class="btn btn-danger w-25 reset-button d-flex gap-2 align-items-center justify-content-center">
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
            <div class="card">
                <div class="card-header h2 fw-bold m-0">Блок - О компании</div>
                <div class="card-body">
                    <?= $form->field($model, 'about_company_title')->widget(CKEditor::className(), [
                        'preset' => 'basic',
                        'clientOptions' => [
                            'height' => 150
                        ]
                    ]); ?>

                    <?= $form->field($model, 'about_company_content')->widget(CKEditor::className(), [
                        'preset' => 'full',
                        'clientOptions' => [
                            'height' => 200
                        ]
                    ]); ?>
                    <div class="preview-container d-flex flex-column mb-3">
                        <label>
                            <?= $form->field($model, 'about_company_image', ['options' => ['class' => 'mb-2']])->fileInput(['hidden' => true, 'class' => 'preview'])->label(true) ?>
                            <?php $image = StaticFunctions::getImage($model->about_company_image, 'main-page', $model->id)?>
                            <div class="preview-image mb-2 d-flex justify-content-center">
                                <img src="<?= $image ?>" alt="no photo" style="max-width: 100%; height: 200px;">
                            </div>
                            <div class="d-flex gap-2 actions justify-content-center">
                                <div class="btn btn-primary d-flex w-25 gap-2 align-items-center justify-content-center">
                                    <i class="fa fa-file-upload"></i>
                                    Выбрать ...
                                </div>
                                <button type="button" class="btn btn-danger w-25 reset-button d-flex gap-2 align-items-center justify-content-center">
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
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


