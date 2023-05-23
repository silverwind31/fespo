<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="top_bg" style="background-image: url(/img/about-top-image.jpg);"></div>

<div class="main">
    <div class='center-wrapper'>
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="#">Главная</a></li>
                <li>О компании</li>
            </ul>
        </div>
        <h1 class="main__title title_2">О компании</h1>
        <div class="about">
            <div class="about__top">
                <div class="about__top-col">
                    <p>ФеСПО – российская продукция, разработанная для систем подогрева плоскостных сооружений, спроектированная для российских условий со сроком эксплуатации от 40 до 55 лет без непредвиденных затрат.</p>
                    <p>Зарождение технологии началось в стенах МЭИ ТУ в 2002-2003 годах, первые системы уже отработали более 15 лет без утечек и сбоев.</p>
                </div>
                <div class="about__top-col">
                    <p>За 20 лет нашей работы мы выполнили более 400  проектов по всей России. Наша продукция на стадионах различного уровня: олимпийский стадион «Фишт» г.Сочи, центральные стадионы крупных городов (Москва, Челябинск, Пермь, Тамбов…), тренировочные поля к ЧМ 2018 по футболу, футбольные поля профессиональных и любительских клубов, площадки для пляжных видов спорта, частные заказы.</p>
                </div>
            </div>
            <div class="about__mainimage"><img src='/img/about-image.jpg' alt='img'></div>
            <div class="about__desc">
                <p>Полностью монолитная система не подверженная коррозии и гниению – все элементы имеют одинаковое температурное удлинение, отсутствие резьбовых и компрессионных соединений. Греющие петли выпускаются под конкретную длину поля. Усовершенствование ведется постоянно, учитывая опыт монтажа, эксплуатации и обслуживания.</p>
                <p>Предусмотрены эффективная замена теплоносителя и поиск проколов. Разработанный теплоноситель имеет только функциональные в рабочих режимах добавки и обладает люминесценцией, что облегчает поиск утечек. Обладает защитными свойствами для металлических поверхностей оборудования ИТП, не агрессивен к уплотнителям. </p>
                <p>Срок службы не менее 10 лет.</p>
            </div>
            <div class="about-info">
                <div class="about-info__image"><img src='/img/about-info-image.jpg' alt='img'></div>
                <div class="about-info__text">
                    <p>Подобранное оборудование ИТП имеет идеальную совместимость, что повышает эффективность и надежность по сравнению с экспериментальными проектами и решениями.</p>
                    <p>В комплексе система имеет оптимально простое исполнение и проверенные решения, что делает её удобной и понятной в эксплуатации и обслуживании даже для неквалифицированного персонала.</p>
                    <p>Универсальность системы позволяет с помощью изменения настроек автоматики адаптировать её к искусственным покрытиям с полузасыпанным ворсом, использованию резинового гранулята или с использованием геофилов. Отсутствует необходимость во вмешательство в оборудование ИТП или основание футбольного поля при замене типа покрытия или длины ворса.</p>
                    <p>Гарантийный срок на систему подогрева 20 лет! При выполнении монтажных работ ООО СК Феаген или официальным представителем, в случае нарушения герметичности системы подогрева в течении 20 лет поиск и устранение утечки бесплатно (при выявленном браке продукции или монтажа)!</p>
                </div>
            </div>
        </div><!-- end about -->
    </div><!-- end center-wrapper -->
</div><!-- end main -->

<section class="work">
    <div class='center-wrapper'>
        <h2 class="work__title">Как мы работаем</h2>
        <div class="work-slider">
            <div class="work-slider__slide">
                <div class="work-section">
                    <a href="https://www.youtube.com/watch?v=WNeLUngb-Xg" class="work-section__video fancybox"><img src='/img/work-slide1.jpg' alt='img'></a>
                    <div class="work-section__desc">
                        <p>Первая в России система для стандартного футбольного поля размерами 110 х72 метра, спроектированная под тепловую нагрузку 1 Гкал (поле №4 с искусственным газоном на стадионе им Э.А. Стрельцова (Торпедо) г. Москва).</p>
                    </div>
                </div>
            </div>
            <div class="work-slider__slide">
                <div class="work-section">
                    <a href="https://www.youtube.com/watch?v=WNeLUngb-Xg" class="work-section__video fancybox"><img src='/img/work-slide1.jpg' alt='img'></a>
                    <div class="work-section__desc">
                        <p>Первая в России система для стандартного футбольного поля размерами 110 х72 метра, спроектированная под тепловую нагрузку 1 Гкал (поле №4 с искусственным газоном на стадионе им Э.А. Стрельцова (Торпедо) г. Москва).</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end center-wrapper -->
</section><!-- end work -->

<section class="letters">
    <div class='center-wrapper'>
        <h2 class="letters__title">Благодарственные письма</h2>
        <div class="letters__row">
            <div class="letters__col">
                <a href="#" class="letters__item"><img src='/img/content/letters/letters-image1.png' alt='img'></a>
            </div>
            <div class="letters__col">
                <a href="#" class="letters__item"><img src='/img/content/letters/letters-image2.png' alt='img'></a>
            </div>
            <div class="letters__col">
                <a href="#" class="letters__item"><img src='/img/content/letters/letters-image3.png' alt='img'></a>
            </div>
            <div class="letters__col">
                <a href="#" class="letters__item"><img src='/img/content/letters/letters-image4.png' alt='img'></a>
            </div>
            <div class="letters__col">
                <a href="#" class="letters__item"><img src='/img/content/letters/letters-image5.png' alt='img'></a>
            </div>
            <div class="letters__col">
                <a href="#" class="letters__item"><img src='/img/content/letters/letters-image6.png' alt='img'></a>
            </div>
            <div class="letters__col">
                <a href="#" class="letters__item"><img src='/img/content/letters/letters-image7.png' alt='img'></a>
            </div>
            <div class="letters__col">
                <a href="#" class="letters__item"><img src='/img/content/letters/letters-image8.png' alt='img'></a>
            </div>
        </div>
    </div><!-- end center-wrapper -->
</section><!-- end letters -->

<section class="callback">
    <div class='center-wrapper'>
        <h2 class="callback__title">У вас возникли вопросы?</h2>
        <div class="callback__subtitle">Оставьте заявку на бесплатную консультацию</div>
        <form action="#" class="callback-form">
            <div class="callback-form__row">
                <div class="callback-form__col">
                    <input type="text" class="callback-form__input" placeholder="Имя">
                </div>
                <div class="callback-form__col">
                    <input type="text" class="callback-form__input mask_phone" placeholder="Телефон">
                </div>
                <div class="callback-form__col">
                    <input type="text" class="callback-form__input" placeholder="E-mail">
                </div>
                <div class="callback-form__col">
                    <button type="submit" class="callback-form__btn btn btn--solid">Оставить заявку</button>
                    <div class="callback-form__agreement">Нажимая на кнопку вы соглашаетесь<br> с <a href="#">политикой конфиденциальности</a></div>
                </div>
            </div>
        </form>
    </div><!-- end center-wrapper -->
</section><!-- end callback -->

<section class="mainarticles">
    <div class="center-wrapper">
        <h2 class="mainarticles__title title_2">Статьи</h2>
        <div class="mainarticles__list">
            <div class="mainarticles-item">
                <a href="#" class="mainarticles-item__image"><img src="/img/content/articles/articles-image1.jpg" alt="img"></a>
                <div class="mainarticles-item__content">
                    <div class="mainarticles-item__title"><a href="#">Первая в России система для стандартного футбольного поля размерами 110 х72 метра</a></div>
                    <div class="mainarticles-item__date">4 февраля 2023</div>
                </div>
            </div>
            <div class="mainarticles-item">
                <a href="#" class="mainarticles-item__image"><img src="/img/content/articles/articles-image2.jpg" alt="img"></a>
                <div class="mainarticles-item__content">
                    <div class="mainarticles-item__title"><a href="#">Первая в России система для стандартного футбольного поля размерами 110 х72 метра</a></div>
                    <div class="mainarticles-item__date">4 февраля 2023</div>
                </div>
            </div>
            <div class="mainarticles-item">
                <a href="#" class="mainarticles-item__image"><img src="/img/content/articles/articles-image3.jpg" alt="img"></a>
                <div class="mainarticles-item__content">
                    <div class="mainarticles-item__title"><a href="#">Первая в России система для стандартного футбольного поля размерами 110 х72 метра</a></div>
                    <div class="mainarticles-item__date">4 февраля 2023</div>
                </div>
            </div>
        </div>
        <a href="#" class="mainarticles__all btn">Все статьи</a>
    </div><!-- end center-wrapper -->
</section><!-- end mainarticles -->

<section class="maincontacts">
    <div class="center-wrapper">
        <h2 class="maincontacts__title title_2">Контакты</h2>
        <div class="maincontacts__row">
            <div class="maincontacts__info">
                <div class="maincontacts__info-inner">
                    <div class="maincontacts__block">
                        <div class="maincontacts__caption">Адрес:</div>
                        <div class="maincontacts__text">г. Москва, ул 3-я Тверская-Ямская, пер. Александра Невского д. 32</div>
                    </div>
                    <div class="maincontacts__block">
                        <div class="maincontacts__caption">Телефон:</div>
                        <div class="maincontacts__text"><a href="tel:+74958883211">+7 (495) 888-32-11</a></div>
                        <div class="maincontacts__text"><a href="tel:+79550322518">+7 (955) 032-25-18 </a></div>
                    </div>
                    <div class="maincontacts__block">
                        <div class="maincontacts__caption">Почта:</div>
                        <div class="maincontacts__text"><a href="mailto:fespo@gmail.com">fespo@gmail.com</a></div>
                    </div>
                </div>
            </div>
            <div class="maincontacts__map">
                <div id="map"><img src='/img/map.jpg' alt='img'></div>
            </div>
        </div>
    </div><!-- end center-wrapper -->
</section><!-- end maincontacts -->