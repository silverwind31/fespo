<?php

use common\components\StaticFunctions;
use frontend\widgets\Callback;
use frontend\widgets\Letters;
use frontend\widgets\MainArticles;
use frontend\widgets\WorkSlider;

$this->title = 'О Компании';
?>
<div class="top_bg" style="background-image: url('/img/about-top-image.jpg');"></div>

<div class="main">
    <div class='center-wrapper'>
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="<?=\yii\helpers\Url::home()?>">Главная</a></li>
                <li><?= !empty($model->title) ? $model->title : '' ?></li>
            </ul>
        </div>
        <h1 class="main__title title_2"><?= !empty($model->title) ? $model->title : '' ?></h1>
        <div class="about">
            <?php if(!empty($model)): ?>
                <?php $mainImage = StaticFunctions::getImage($model->main_image, 'about-company', $model->id) ?>
                <?php $infoImage = StaticFunctions::getImage($model->info_image, 'about-company', $model->id) ?>
                <div class="about__top">
                    <div class="about__top-col">
                        <?=$model->block_left_content?>
                    </div>
                    <div class="about__top-col">
                        <?=$model->block_right_content?>
                    </div>
                </div>
                <div class="about__mainimage"><img src='<?=$mainImage?>' alt='img'></div>
                <div class="about__desc">
                    <?=$model->block_middle_content?>
                </div>
                <div class="about-info">
                    <div class="about-info__image"><img src='<?=$infoImage?>' alt='img'></div>
                    <div class="about-info__text">
                        <?=$model->block_bottom_description?>
                    </div>
                </div>
            <?php endif; ?>
        </div><!-- end about -->
    </div><!-- end center-wrapper -->
</div><!-- end main -->

<?= WorkSlider::widget() ?>

<?= Letters::widget() ?>

<?= Callback::widget()?>

<?= MainArticles::widget()?>

<?=frontend\widgets\MainContacts::widget()?>