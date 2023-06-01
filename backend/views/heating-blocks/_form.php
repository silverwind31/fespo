<?php

use Itstructure\CKEditor\CKEditor;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\HeatingBlocks $model */
/** @var yii\bootstrap5\ActiveForm $form */

?>

<div class="heating-blocks-form mb-3">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
                        'preset' => 'full',
                        'clientOptions' => [
                            'height' => 250,
                            'filebrowserBrowseUrl' => '/ckfinder/ckfinder.html',
                            'filebrowserImageBrowseUrl' => '/ckfinder/ckfinder.html?type=Images',
                            'filebrowserUploadUrl' => '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                            'filebrowserImageUploadUrl' => '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                            'filebrowserWindowWidth' => '1000',
                            'filebrowserWindowHeight' => '700',
                            'allowedContent' => true,
                            'language' => 'ru',
                        ]
                    ]) ?>
                    <?= $form->field($model, 'order_by')->textInput() ?>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
