<div class="top_bg" style="background-image: url('/img/articles-top-image.jpg');"></div>

<div class="main">
    <div class='center-wrapper'>
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="<?=\yii\helpers\Url::home()?>">Главная</a></li>
                <li>Статьи</li>
            </ul>
        </div>
        <h1 class="main__title title_2">Статьи</h1>
        <div class="articles">
            <?=\frontend\widgets\AllArticles::widget()?>
        </div>
    </div><!-- end center-wrapper -->
</div><!-- end main -->

<?php echo frontend\widgets\Callback::widget() ?>

<?php echo frontend\widgets\MainContacts::widget() ?>