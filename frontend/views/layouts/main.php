<?php

/** @var \yii\web\View $this */
/** @var string $content */

use frontend\assets\AppAsset;
use frontend\widgets\Modal;
use yii\bootstrap5\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrapper">
    <?=frontend\widgets\Header::widget()?>

    <?=$content?>

    <?=frontend\widgets\Footer::widget()?>
</div><!-- end wrapper -->

<?= Modal::widget()?>

<div id="modal-completed" class="modal" style="display: none;" tabindex="0">
    <div class="modal__close" data-fancybox-close><img src="/img/icon-close.svg" width="20" height="20" alt="img"></div>
    <div class="modal__body">
        <div class="modal__title">Спасибо!<br> ваша заявка принята!</div>
        <form action="#">
            <div class="modal__subtitle">В ближайшее время с вами<br> свяжется наш специалист</div>
            <div class="modal__text">Для того, чтобы продолжить нажмите<br> на кнопку “На главную”</div>
            <div class="modal__button">
                <button type="button" class="modal-form__btn btn btn--solid" data-fancybox-close>На главную</button>
            </div>
        </form>
    </div>
</div><!-- end modal-completed -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
