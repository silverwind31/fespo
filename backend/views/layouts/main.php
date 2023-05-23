<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
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
<body data-theme="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="dark" data-sidebar-user='true'>
<?php $this->beginBody() ?>
<!-- Pre-loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">Loading...</div>
    </div>
</div>
<div id="wrapper">
    <?=\backend\widgets\Navbar::widget()?>

    <?=\backend\widgets\Sidebar::widget()?>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="content-header">
                    <div class="row mb-3 mt-3 align-items-center justify-content-end">
                        <div class="col-md-12" style="font-size: 20px">
                            <?= Breadcrumbs::widget([
                                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                            ]) ?>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <?= Alert::widget() ?>
                    <?=$content?>
                </div>
            </div>
        </div>

        <?=\backend\widgets\Footer::widget()?>

    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
