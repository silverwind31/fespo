<section class="maincontacts">
    <div class="center-wrapper">
        <h2 class="maincontacts__title title_2">Контакты</h2>
        <div class="maincontacts__row">
            <div class="maincontacts__info">
                <div class="maincontacts__info-inner">
                    <?php if(!empty($contactsPageModel)): ?>
                    <div class="maincontacts__block">
                        <div class="maincontacts__caption">Адрес:</div>
                        <div class="maincontacts__text"><?=$contactsPageModel->address?></div>
                    </div>
                    <div class="maincontacts__block">
                        <div class="maincontacts__caption">Телефон:</div>
                        <div class="maincontacts__text"><a href="tel:<?=$contactsPageModel->phone_1?>"><?=$contactsPageModel->phone_1?></a></div>
                        <div class="maincontacts__text"><a href="tel:<?=$contactsPageModel->phone_2?>"><?=$contactsPageModel->phone_2?></a></div>
                    </div>
                    <div class="maincontacts__block">
                        <div class="maincontacts__caption">Почта:</div>
                        <div class="maincontacts__text"><a href="mailto:<?=$contactsPageModel->email?>"><?=$contactsPageModel->email?></a></div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="maincontacts__map">
                <?=$contactsPageModel->location?>
            </div>
        </div>
    </div><!-- end center-wrapper -->
</section><!-- end maincontacts -->