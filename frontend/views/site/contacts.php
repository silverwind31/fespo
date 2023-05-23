<div class="top_bg" style="background-image: url(/img/contacts-top-image.jpg);"></div>
<div class="main">
    <div class='center-wrapper'>
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="<?=\yii\helpers\Url::home()?>">Главная</a></li>
                <li>Контакты</li>
            </ul>
        </div>
        <h1 class="main__title title_2">Контакты</h1>
        <div class="contacts">
            <div class="contacts__desc">
                <p>ФЕСПО — российская продукция, разработанная для систем подогрева<br> плоскостных сооружений</p>
                <p>Мы находимся в центре городской жизни Москвы.<br>
                    Заходите к нам в офис, звоните по указанным номерам ниже,<br>
                    либо напишите нам на почту.</p>
                <p>МЫ ВСЕГДА ВАМ РАДЫ.</p>
            </div>
            <div class="contacts__row">
                <?php if(!empty($settings)): ?>
                    <div class="contacts__col">
                        <div class="contacts__item">
                            <div class="contacts__item-caption">Адрес:</div>
                            <div class="contacts__item-value"><?=$settings['address']?></div>
                        </div>
                        <div class="contacts__item">
                            <div class="contacts__item-caption">Телефон:</div>
                            <div class="contacts__item-value">
                                <a href="tel:<?=$settings['tel_1'] ?>"><?=$settings['tel_2_title'] ?></a><br>
                                <a href="tel:<?=$settings['tel_2'] ?>"><?=$settings['tel_2_title']?></a>
                            </div>
                        </div>
                        <div class="contacts__item">
                            <div class="contacts__item-caption">Адрес:</div>
                            <div class="contacts__item-value">
                                <a href="mailto:<?=$settings['email']?>"><?=$settings['email']?></a>
                            </div>
                        </div>
                    </div>
                    <div class="contacts__col">
                        <div class="contacts__item">
                            <div class="contacts__item-caption">Реквизиты:</div>
                            <div class="contacts__item-value">
                                <?=$settings['sp_name']?><br>
                                ИНН <?=$settings['tin_number']?><br>
                                ОГРНИП <?=$settings['psrnsp']?>
                            </div>
                        </div>
                        <div class="contacts__item">
                            <div class="contacts__item-caption">Юридический адрес:</div>
                            <div class="contacts__item-value">
                                <?=$settings['legal_address']?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="contacts__map">
                <div id="map"><img src='/img/map.jpg' alt='img'></div>
            </div>
        </div><!-- end contacts -->
    </div><!-- end center-wrapper -->
</div><!-- end main -->
