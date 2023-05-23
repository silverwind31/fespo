<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Авторизация';
?>
<!--Auth fluid left content -->
<div class="auth-fluid-form-box">
    <div class="align-items-center d-flex h-100">
        <div class="p-3 w-100">
            <div class="auth-brand text-center text-lg-start">
                <div class="auth-logo">
                    <div class="logo logo-dark text-center">
                            <span class="logo-lg">
                                <img src="/admin_assets/images/logo-dark.png" alt="" height="22">
                            </span>
                    </div>
                    <div class="logo logo-light text-center">
                            <span class="logo-lg">
                                <img src="/admin_assets/images/logo-light.png" alt="" height="22">
                            </span>
                    </div>
                </div>
            </div>
            <h1><?= Html::encode($this->title) ?></h1>
            <h4 class="text-muted mb-4">Для входа заполните поля:</h4>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div class="form-group">
                <?= Html::submitButton('Войти', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

<div class="auth-fluid-right text-center">
    <div class="auth-user-testimonial">
        <h2 class="mb-3 text-white">Добро пожаловать в панель администратора <strong>UBOLD!</strong></h2>
    </div>
</div>

