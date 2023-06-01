<?php

/** @var yii\web\View $this */

use common\components\StaticFunctions;
use frontend\widgets\MainArticles;
use frontend\widgets\MainProjects;
use frontend\widgets\Slider;

?>
<?= Slider::widget(['type' => 'main']) ?>

<section class="maininfo">
    <div class="center-wrapper">
        <?php if(!empty($model)): ?>
        <?php $firstImage = StaticFunctions::getImage($model->block_first_image, 'main-page', $model->id) ?>
        <?php $secondImage = StaticFunctions::getImage($model->block_second_image, 'main-page', $model->id) ?>
        <?php $aboutImage = StaticFunctions::getImage($model->about_company_image, 'main-page', $model->id) ?>
            <div class="maininfo__top">
                <div class="maininfo__top-col">
                    <div class="maininfo__top-text"><?=$model->top_text?></div>
                </div>
                <div class="maininfo__top-col">
                    <div class="maininfo__top-desc"><?=$model->top_description?></div>
                </div>
            </div>
            <h2 class="maininfo__title title_2"><?=$model->block_title?></h2>
            <div class="maininfo__subtitle"><?=$model->block_subtitle?></div>
            <div class="maininfo__row maininfo__row_1">
                <div class="maininfo__col">
                    <div class="maininfo__image"><img src="<?=$firstImage?>" alt="img"></div>
                </div>
                <div class="maininfo__col">
                    <div class="maininfo-features">
                        <div class="maininfo-features__item">
                            <div class="maininfo-features__caption"><?=$model->block_feature_1_title?></div>
                            <div class="maininfo-features__desc"><?=$model->block_feature_1_subtitle?></div>
                        </div>
                        <div class="maininfo-features__item">
                            <div class="maininfo-features__caption"><?=$model->block_feature_2_title?></div>
                            <div class="maininfo-features__desc"><?=$model->block_feature_2_subtitle?></div>
                        </div>
                        <div class="maininfo-features__item">
                            <div class="maininfo-features__caption"><?=$model->block_feature_3_title?></div>
                            <div class="maininfo-features__desc"><?=$model->block_feature_3_subtitle?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="maininfo__row maininfo__row_2">
                <div class="maininfo__col">
                    <div class="maininfo__image"><img src="<?=$secondImage?>" alt="img"></div>
                </div>
                <div class="maininfo__col">
                    <div class="maininfo-content">
                        <div class="maininfo-content__caption"><?=$model->block_content_caption?></div>
                        <div class="maininfo-content__desc">
                            <?=$model->block_content?>
                        </div>
                        <a href="<?=\yii\helpers\Url::to(['/field-heating'])?>" class="maininfo-content__btn btn">Подробнее</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div><!-- end center-wrapper -->
</section><!-- end maininfo -->

<?= MainProjects::widget()?>

<section class="mainabout">
    <div class="center-wrapper">
        <h2 class="mainabout__title title_2"><?=$model->about_company_title?></h2>
        <div class="mainabout__row">
            <div class="mainabout__image"><img src="<?=$aboutImage?>" alt="img"></div>
            <div class="mainabout__content">
                <div class="mainabout__text">
                    <?=$model->about_company_content?>
                </div>
                <a href="<?=\yii\helpers\Url::to(['/about-us'])?>" class="mainabout__more btn">Подробнее</a>
            </div>
        </div>
    </div><!-- end center-wrapper -->
</section><!-- end mainabout -->

<?= MainArticles::widget()?>

<?=frontend\widgets\MainContacts::widget()?>
