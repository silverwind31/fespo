<?php

/** @var yii\web\View $this */

?>
<section class="promo">
    <div class="promoslider">
        <?php if(!empty($promoSlides)): ?>
            <?php foreach ($promoSlides as $slide): ?>
            <?php $image = \common\components\StaticFunctions::getImage($slide->image, 'promo-slider', $slide->id) ?>
            <div class="promoslider__slide">
            <div class="promoslider__image"><img src='<?=$image?>' alt='img'></div>
            <div class="promoslider__content">
                <div class="center-wrapper">
                    <h1 class="promoslider__title"><?=$slide->title?></h1>
                    <div class="promoslider__desc"><?=$slide->description?></div>
                    <a href="#" class="promoslider__btn btn js-btn-callback">Оставить заявку</a>
                </div>
            </div>
        </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section><!-- end promo -->

<section class="maininfo">
    <div class="center-wrapper">
        <div class="maininfo__top">
            <div class="maininfo__top-col">
                <div class="maininfo__top-text">Полностью монолитная однородная система (монтируется с помощью раструбной и стыковой сварки) не подверженная коррозии и гниению – все элементы имеют одинаковое температурное удлинение что не вызывает нарушения герметичности соединений (отсутствие резьбовых и компрессионных фитингов).</div>
            </div>
            <div class="maininfo__top-col">
                <div class="maininfo__top-desc">Универсальность системы позволяет настраивать ее под различные типы покрытий без вмешательства в основание футбольного поля и оборудование ИТП. При замене искусственного газона с различными наполнителями (SBR, геофил, песок) и длиной ворса или замене натурального газона на искусственный и наоборот отсутствует необходимость во вмешательстве в основание футбольного поля и систему дренажа. Адаптация системы происходит настройками системы автоматизации или модернизацией теплообменника (источника тепла).</div>
            </div>
        </div>
        <h2 class="maininfo__title title_2">Подогрев полей</h2>
        <div class="maininfo__subtitle">Первая в России система для стандартного футбольного поля размерами 110 х72 метра, спроектированная под тепловую нагрузку 1 Гкал (поле №4 с искусственным газоном на стадионе им Э.А. Стрельцова (Торпедо)<br> г. Москва).</div>
        <div class="maininfo__row maininfo__row_1">
            <div class="maininfo__col">
                <div class="maininfo__image"><img src="/img/maininfo-image1.jpg" alt="img"></div>
            </div>
            <div class="maininfo__col">
                <div class="maininfo-features">
                    <div class="maininfo-features__item">
                        <div class="maininfo-features__caption">20 лет</div>
                        <div class="maininfo-features__desc">Гарантийный срок<br> на систему подогрева</div>
                    </div>
                    <div class="maininfo-features__item">
                        <div class="maininfo-features__caption">Бесплатно</div>
                        <div class="maininfo-features__desc">Поиск и устранение утечки<br> в течении 20 лет бесплатно</div>
                    </div>
                    <div class="maininfo-features__item">
                        <div class="maininfo-features__caption">Не менее 10 лет</div>
                        <div class="maininfo-features__desc">Срок службы теплоносителя</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="maininfo__row maininfo__row_2">
            <div class="maininfo__col">
                <div class="maininfo__image"><img src="/img/maininfo-image2.jpg" alt="img"></div>
            </div>
            <div class="maininfo__col">
                <div class="maininfo-content">
                    <div class="maininfo-content__caption">Первая в России система для стандартного<br> футбольного поля размерами 110 х72 метра</div>
                    <div class="maininfo-content__desc">
                        <p>Первая в России система для стандартного футбольного поля размерами 110 х72 метра, спроектированная под тепловую нагрузку 1 Гкал (поле №4 с искусственным газоном на стадионе им Э.А. Стрельцова (Торпедо)<br> г. Москва).</p>
                        <p>Первая в России система для стандартного футбольного поля размерами 110 х72 метра</p>
                    </div>
                    <a href="#" class="maininfo-content__btn btn">Подробнее</a>
                </div>
            </div>
        </div>
    </div><!-- end center-wrapper -->
</section><!-- end maininfo -->

<section class="mainprojects">
    <div class="center-wrapper">
        <h2 class="mainprojects__title title_2">Проектирование</h2>
        <div class="mainprojects-carousel">
            <div class="mainprojects-carousel__slide">
                <a href="#" class="mainprojects-carousel__item"><img src="/img/content/projects/projects-image1.jpg" alt="img"></a>
            </div>
            <div class="mainprojects-carousel__slide">
                <a href="#" class="mainprojects-carousel__item"><img src="/img/content/projects/projects-image2.jpg" alt="img"></a>
            </div>
            <div class="mainprojects-carousel__slide">
                <a href="#" class="mainprojects-carousel__item"><img src="/img/content/projects/projects-image3.jpg" alt="img"></a>
            </div>
            <div class="mainprojects-carousel__slide">
                <a href="#" class="mainprojects-carousel__item"><img src="/img/content/projects/projects-image2.jpg" alt="img"></a>
            </div>
        </div>
        <a href="#" class="mainprojects__all btn">Посмотреть все проекты</a>
    </div><!-- end center-wrapper -->
</section><!-- end mainprojects -->

<section class="mainabout">
    <div class="center-wrapper">
        <h2 class="mainabout__title title_2">О компании</h2>
        <div class="mainabout__row">
            <div class="mainabout__image"><img src="/img/mainabout-image.jpg" alt="img"></div>
            <div class="mainabout__content">
                <div class="mainabout__text">
                    <p>Зарождение технологии началось в стенах МЭИ ТУ<br> в 2002-2003 годах, первые системы уже отработали более 15 лет без утечек и сбоев.</p>
                    <p>Выполнена на стадионах различного уровня: олимпийский стадион «Фишт» г.Сочи, центральные стадионы крупных городов (Москва, Челябинск, Пермь, Тамбов…), тренировочные поля к ЧМ 2018 по футболу, футбольные поля профессиональных и любительских клубов, площадки для пляжных видов спорта, частные заказы.</p>
                </div>
                <a href="<?=\yii\helpers\Url::to(['/about-us'])?>" class="mainabout__more btn">Подробнее</a>
            </div>
        </div>
    </div><!-- end center-wrapper -->
</section><!-- end mainabout -->

<?=\frontend\widgets\MainArticles::widget()?>

<?=frontend\widgets\MainContacts::widget()?>
