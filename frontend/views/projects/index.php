<?php

use frontend\widgets\Callback;
use frontend\widgets\Letters;
use frontend\widgets\MainArticles;
use frontend\widgets\Slider;

$this->title = 'Проектирование';


?>
<?= Slider::widget(['type' => 'project']) ?>

<div class="main">
    <div class='center-wrapper'>
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="<?=\yii\helpers\Url::home()?>">Главная</a></li>
                <li>Проектирование</li>
            </ul>
        </div>
        <div class="projects">
            <h2 class="main__title">Проектирование</h2>
            <div class="projects__desc">
                <p>За 20 лет нашей работы мы выполнили более 400  проектов по всей России. Наша продукция на стадионах различного уровня: олимпийский стадион «Фишт» г.Сочи, центральные стадионы крупных городов (Москва, Челябинск, Пермь, Тамбов…), тренировочные поля к ЧМ 2018 по футболу, футбольные поля профессиональных и любительских клубов, площадки для пляжных видов спорта, частные заказы.</p>
            </div>
            <div class="projects__row">
                <?php if(!empty($models)): ?>
                    <?php foreach ($models as $model): ?>
                        <?php $image = \common\components\StaticFunctions::getImage($model->image, 'projects', $model->id) ?>
                        <div class="projects__col">
                    <div class="projects-item">
                        <a href="<?=\yii\helpers\Url::to(['/projects/view', 'id' => $model->id])?>" class="projects-item__body">
                            <div class="projects-item__image"><img src='<?=$image?>' alt='img'></div>
                            <div class="projects-item__content">
                                <div class="projects-item__title"><?=$model->name?></div>
                                <div class="projects-item__desc"><?=$model->description?></div>
                            </div>
                        </a>
                    </div>
                </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <?= \yii\widgets\LinkPager::widget([
                'pagination' => $pagination,
                'prevPageLabel' => '<img src="/img/icon-arrow-prev.svg" alt="img">',
                'nextPageLabel' => '<img src="/img/icon-arrow-next.svg" alt="img">',
                'maxButtonCount' => 5,
                'options' => ['class' => 'paginator'],
                'activePageCssClass' => 'active',
            ]) ?>
        </div><!-- end projects -->
    </div><!-- end center-wrapper -->
</div><!-- end main -->

<?= Callback::widget()?>

<?= Letters::widget() ?>

<?= MainArticles::widget()?>

<?=frontend\widgets\MainContacts::widget()?>