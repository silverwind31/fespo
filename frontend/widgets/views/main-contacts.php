<section class="maincontacts">
    <div class="center-wrapper">
        <h2 class="maincontacts__title title_2">Контакты</h2>
        <div class="maincontacts__row">
            <div class="maincontacts__info">
                <div class="maincontacts__info-inner">
                    <?php if(!empty($settings)): ?>
                    <div class="maincontacts__block">
                        <div class="maincontacts__caption">Адрес:</div>
                        <div class="maincontacts__text"><?=$settings['address']?></div>
                    </div>
                    <div class="maincontacts__block">
                        <div class="maincontacts__caption">Телефон:</div>
                        <div class="maincontacts__text"><a href="tel:<?=$settings['tel_1']?>"><?=$settings['tel_1_title']?></a></div>
                        <div class="maincontacts__text"><a href="tel:<?=$settings['tel_2']?>"><?=$settings['tel_2_title']?></a></div>
                    </div>
                    <div class="maincontacts__block">
                        <div class="maincontacts__caption">Почта:</div>
                        <div class="maincontacts__text"><a href="mailto:<?=$settings['email']?>"><?=$settings['email']?></a></div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="maincontacts__map">
                <div id="map"><img src='/img/map.jpg' alt='img'></div>
            </div>
        </div>
    </div><!-- end center-wrapper -->
</section><!-- end maincontacts -->