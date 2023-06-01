<?php

use common\components\StaticFunctions;
use Itstructure\CKEditor\CKEditor;
use wbraganca\dynamicform\DynamicFormWidget;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Projects $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="projects-form mb-3">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
                        'preset' => 'basic'
                    ]); ?>

                    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
                        'preset' => 'basic'
                    ]); ?>

                    <?= $form->field($model, 'project_garantees_title')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'project_garantees_description_1')->widget(CKEditor::className(), [
                        'preset' => 'basic'
                    ]); ?>
                    <?= $form->field($model, 'project_garantees_description_2')->widget(CKEditor::className(), [
                        'preset' => 'basic'
                    ]); ?>

                    <div class="preview-container d-flex flex-column mb-3">
                        <label>
                            <?= $form->field($model, 'image', ['options' => ['class' => 'mb-2']])->fileInput(['hidden' => true, 'class' => 'preview'])->label(true) ?>
                            <?php $image = StaticFunctions::getImage($model->image, 'projects', $model->id)?>
                            <div class="preview-image mb-2 d-flex justify-content-center">
                                <img src="<?= $image ?>" alt="no photo" style="max-width: 100%; height: 200px;">
                            </div>
                            <div class="d-flex gap-2 actions">
                                <div class="btn btn-primary d-flex gap-2 align-items-center justify-content-center">
                                    <i class="fa fa-file-upload"></i>
                                    Выбрать ...
                                </div>
                                <button type="button" class="btn btn-danger  reset-button d-flex gap-2 align-items-center justify-content-center">
                                    <i class="fa fa-trash"></i>
                                    Удалить
                                </button>
                            </div>
                        </label>
                    </div>

                    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'order_by')->textInput() ?>

                    <?= $form->field($model, 'status', ['options' => ['class' => 'mb-0']])->checkbox([
                        'data-plugin' => 'switchery',
                        'data-color' => '#98a6ad',
                        'data-size' => 'small',
                    ]) ?>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    // Begin the DynamicFormWidget
                    DynamicFormWidget::begin([
                        'widgetContainer' => 'dynamicform_wrapper',
                        'widgetBody' => '.container-items',
                        'widgetItem' => '.item',
                        'limit' => 3,
                        'min' => 1,
                        'insertButton' => '.add-item',
                        'deleteButton' => '.remove-item',
                        'model' => $projectStats[0],
                        'formId' => 'w0',
                        'formFields' => [
                            'name',
                            'value'
                        ],
                    ]);
                    ?>

                    <div class="container-items">
                        <?php foreach ($projectStats as $i => $projectStat): ?>
                            <div class="item panel panel-default">
                                <div class="panel-heading d-flex justify-content-between align-items-center-center">
                                    <h3 class="panel-title pull-left">Характеристики</h3>
                                    <div class="pull-right d-flex align-items-center gap-2">
                                        <button type="button" class="add-item btn btn-success">Добавить</button>
                                        <button type="button" class="remove-item btn btn-danger">Удалить</button>
                                    </div>
                                </div>
                                <!-- Panel content -->
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?= $form->field($projectStat, "[{$i}]name")->textarea(['rows' => 1, 'style' => 'resize: none']) ?>
                                        </div>
                                        <div class="col-md-12">
                                            <?= $form->field($projectStat, "[{$i}]value")->textarea(['rows' => 3, 'style' => 'resize: none']) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php DynamicFormWidget::end(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
