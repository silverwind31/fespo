<?php

use yii\helpers\Url;

$this->title = 'Контакты';

?>
<div class="top_bg" style="background-image: url('/img/contacts-top-image.jpg');"></div>
<div class="main">
    <div class='center-wrapper'>
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="<?=Url::home()?>">Главная</a></li>
                <li><?= !empty($model->title) ? $model->title : '' ?></li>
            </ul>
        </div>
        <h1 class="main__title title_2"><?= !empty($model->title) ? $model->title : '' ?></h1>
        <div class="contacts">
            <?php if(!empty($model)): ?>
                <div class="contacts__desc">
                   <?=$model->description?>
                </div>
                <div class="contacts__row">
                    <div class="contacts__col">
                        <div class="contacts__item">
                            <div class="contacts__item-caption">Адрес:</div>
                            <div class="contacts__item-value"><?=$model->address?></div>
                        </div>
                        <div class="contacts__item">
                            <div class="contacts__item-caption">Телефон:</div>
                            <div class="contacts__item-value">
                                <a href="tel:<?=$model->phone_1?>"><?=$model->phone_1?></a><br>
                                <a href="tel:<?=$model->phone_2?>"><?=$model->phone_2?></a>
                            </div>
                        </div>
                        <div class="contacts__item">
                            <div class="contacts__item-caption">Почта:</div>
                            <div class="contacts__item-value">
                                <a href="mailto:fespo@gmail.com"><?=$model->email?></a>
                            </div>
                        </div>
                    </div>
                    <div class="contacts__col">
                        <div class="contacts__item">
                            <div class="contacts__item-caption">Реквизиты:</div>
                            <div class="contacts__item-value">
                                <?=$model->requisites?>
                            </div>
                        </div>
                        <div class="contacts__item">
                            <div class="contacts__item-caption">Юридический адрес:</div>
                            <div class="contacts__item-value">
                                <?=$model->legal_address?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contacts__map">
                    <?=$model->location?>
                </div>
            <?php endif; ?>
        </div><!-- end contacts -->
    </div><!-- end center-wrapper -->
</div><!-- end main -->
