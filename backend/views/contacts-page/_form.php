<?php

use Itstructure\CKEditor\CKEditor;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\ContactsPage $model */
/** @var yii\bootstrap5\ActiveForm $form */


$jsFile = 'https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js';
$this->registerJsFile($jsFile, ['depends' => [\yii\web\JqueryAsset::class]]);

$js = <<<JS
    $(document).ready(function() {
         $('#phone-input-1, #phone-input-2').inputmask('+7 (999) 999-99-99');
    });
    JS;

$this->registerJs($js);

?>
<div class="contacts-page-form mb-3">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
                        'preset' => 'standard',
                        'clientOptions' =>[
                            'height' => 250
                        ]
                    ]); ?>

                    <?= $form->field($model, 'address')->widget(CKEditor::className(), [
                        'preset' => 'standard',
                        'clientOptions' =>[
                            'height' => 200
                        ]
                    ]); ?>

                    <?= $form->field($model, 'legal_address')->widget(CKEditor::className(), [
                        'preset' => 'standard',
                        'clientOptions' =>[
                            'height' => 200
                        ]
                    ]); ?>

                    <?= $form->field($model, 'requisites')->widget(CKEditor::className(), [
                        'preset' => 'standard',
                        'clientOptions' =>[
                            'height' => 200
                        ]
                    ]); ?>
                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'phone_1')->textInput(['maxlength' => true, 'id' => 'phone-input-1']) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'phone_2')->textInput(['maxlength' => true, 'id' => 'phone-input-2']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Для добавления Яндекс.Карты на сайт, перейдите в конструктор карт Яндекс для сайта по ссылке:
                            <a href="https://tech.yandex.ru/maps/tools/constructor/" target="_blank">https://tech.yandex.ru/maps/tools/constructor/</a>.
                        </div>
                        <div class="card-body">
                            <?= $form->field($model, 'location')->textarea(['rows' => 3, 'style' => 'resize: none;']) ?>
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
