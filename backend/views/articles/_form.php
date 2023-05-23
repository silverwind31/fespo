<?php

use dosamigos\ckeditor\CKEditor;
use kartik\datetime\DateTimePicker;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Articles $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="articles-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
                        'preset' => 'standard'
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <label class="d-flex align-items-center flex-column mb-3 w-100">
                        <?php $image = \common\components\StaticFunctions::getImage($model->image,'articles',$model->id) ?>
                        <img src="<?=$image?>" alt="no photo" style="max-width: 100%; height: 200px">
                        <?= $form->field($model, 'image')->fileInput(['hidden'=>true, 'class'=>'preview'])->label(false)?>
                        <div class="btn btn-primary w-100">Загрузить изображение</div>
                    </label>


                    <?= $form->field($model, 'published_date')->widget(DateTimePicker::class, [
                        'options' => [
                            'class' => 'form-control',
                            'placeholder' => 'Укажите дату',
                            'value' => $model->isNewRecord ? date('Y-m-d H:i') : $model->published_date,
                        ],
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd hh:ii',
                            'todayHighlight' => true,
                        ],
                    ]) ?>

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