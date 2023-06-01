<!-- views/modal/modal-callback.php -->
<div id="modal-callback" class="modal" style="display: none;" tabindex="0">
    <div class="modal__close" data-fancybox-close>
        <img src="/img/icon-close.svg" width="20" height="20" alt="img">
    </div>
    <div class="modal__body">
        <div class="modal__title">Заявка на бесплатную консультацию</div>
        <?php use yii\helpers\Html;
        use yii\widgets\ActiveForm;

        $form = ActiveForm::begin([
            'id' => 'modal-form',
            'action' => ['main/save-form'],
        ]); ?>
        <div class="modal__input">
            <?= $form->field($model, 'name')->textInput(['class' => 'input', 'placeholder' => 'Имя'])->label(false) ?>
        </div>
        <div class="modal__input">
            <?= $form->field($model, 'phone')->textInput(['class' => 'input input_phone', 'placeholder' => 'Телефон'])->label(false) ?>
        </div>
        <div class="modal__input">
            <?= $form->field($model, 'email')->textInput(['class' => 'input', 'placeholder' => 'E-mail'])->label(false) ?>
        </div>
        <div class="modal__button">
            <?= Html::submitButton('Оставить заявку', ['class' => 'modal-form__btn btn btn--solid js-btn-completed ishlamaydigan-button']) ?>
        </div>
        <div class="modal__agreement">Нажимая на кнопку вы соглашаетесь<br> с <a href="#">политикой конфиденциальности</a></div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
