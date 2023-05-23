<div class="top_bg" style="background-image: url('/img/articles-top-image.jpg');"></div>

<div class="main">
    <div class='center-wrapper'>
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="<?=\yii\helpers\Url::home()?>">Главная</a></li>
                <li><a href="<?=\yii\helpers\Url::to(['/articles'])?>">Статьи</a></li>
                <li><?=$model->title?></li>
            </ul>
        </div>
        <h1 class="main__title title_2">Статьи</h1>
        <div class="articles">
            <?php if(!empty($model)):?>
                <?php $image = \common\components\StaticFunctions::getImage($model->image, 'articles', $model->id) ?>
                <div class="articles-main">
                    <div class="articles-main__image"><img src='<?=$image?>' alt='img'></div>
                    <div class="articles-main__content">
                        <div class="articles-main__date"><?=$model->published_date?></div>
                        <div class="articles-main__title"><?=$model->title?></div>
                        <div class="articles-main__text">
                            <?=$model->content?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?=\frontend\widgets\AllArticles::widget()?>
        </div><!-- end articles -->
    </div><!-- end center-wrapper -->
</div><!-- end main -->

<?php echo frontend\widgets\Callback::widget() ?>

<?php echo frontend\widgets\MainContacts::widget() ?>