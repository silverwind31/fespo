<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<section class="callback">
    <div class="center-wrapper">
        <h2 class="callback__title">У вас возникли вопросы?</h2>
        <div class="callback__subtitle">Оставьте заявку на бесплатную консультацию</div>
        <?php $form = ActiveForm::begin([
            'id' => 'callback-form',
            'action' => ['main/save-form'],
        ]); ?>
        <div class="callback-form__row">
            <div class="callback-form__col">
                <?= $form->field($model, 'name')->textInput(['class' => 'callback-form__input', 'placeholder' => 'Имя'])->label(false) ?>
            </div>
            <div class="callback-form__col">
                <?= $form->field($model, 'phone')->textInput(['class' => 'callback-form__input mask_phone', 'placeholder' => 'Телефон'])->label(false) ?>
            </div>
            <div class="callback-form__col">
                <?= $form->field($model, 'email')->textInput(['class' => 'callback-form__input', 'placeholder' => 'E-mail'])->label(false) ?>
            </div>
            <div class="callback-form__col">
                <?= Html::submitButton('Оставить заявку', ['class' => 'callback-form__btn btn btn--solid']) ?>
                <div class="callback-form__agreement">Нажимая на кнопку вы соглашаетесь<br> с <a href="#">политикой конфиденциальности</a></div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div><!-- end center-wrapper -->
</section><!-- end callback -->