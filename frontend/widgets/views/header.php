<header class="header">
    <div class="center-wrapper">
        <div class="header__row">
            <div class="header-menu__switcher"><span></span></div>
            <a href="<?= \yii\helpers\Url::home() ?>" class="header-logo">Феспо</a>
            <nav class="header-menu">
                <div class="header-menu__close"><img src='/img/icon-close.svg' alt='img'></div>
                <ul class="header-menu__list">
                    <?php if (!empty($frontMenus)): ?>
                        <?php foreach ($frontMenus as $menu): ?>
                            <?php
                            $linkOptions = ['class' => Yii::$app->request->url === $menu->link ? 'current' : ''];
                            if (!empty($menu->class)) {
                                $linkOptions['class'] .= ' ' . $menu->class;
                            }
                            ?>
                            <li><a href="<?= $menu->link ?>" <?= \yii\helpers\Html::renderTagAttributes($linkOptions) ?>><?= $menu->title ?></a></li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </nav>
            <div class="header-phones">
                <?php if (!empty($contactsPageModel)): ?>
                    <a href="tel:<?= $contactsPageModel->phone_1 ?>" class="header-phones__item"><?=  $contactsPageModel->phone_1 ?></a>
                    <a href="tel:<?=  $contactsPageModel->phone_2 ?>" class="header-phones__item"><?=  $contactsPageModel->phone_2 ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div><!-- end center-wrapper -->
</header><!-- end header -->
