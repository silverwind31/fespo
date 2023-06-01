<?php

use common\components\StaticFunctions;
use Itstructure\CKEditor\CKEditor;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\WorkSlider $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="work-slider-form mb-3">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
                        'preset' => 'basic',
                        'clientOptions' => [
                            'height' => 150
                        ]
                    ]); ?>

                    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="preview-container d-flex flex-column mb-3">
                        <label>
                            <?= $form->field($model, 'image', ['options' => ['class' => 'mb-2']])->fileInput(['hidden' => true, 'class' => 'preview'])->label(true) ?>
                            <?php $image = StaticFunctions::getImage($model->image, 'work-slider', $model->id)?>
                            <div class="preview-image mb-2">
                                <img src="<?= $image ?>" alt="no photo" style="max-width: 100%; height: 200px; width: 100%">
                            </div>
                            <div class="d-flex gap-2 actions">
                                <div class="btn btn-primary w-50 d-flex gap-2 align-items-center justify-content-center">
                                    <i class="fa fa-file-upload"></i>
                                    Выбрать ...
                                </div>
                                <button type="button" class="btn btn-danger w-50 reset-button d-flex gap-2 align-items-center justify-content-center">
                                    <i class="fa fa-trash"></i>
                                    Удалить
                                </button>
                            </div>
                        </label>
                    </div>
                    <?= $form->field($model, 'status')->checkbox([
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
