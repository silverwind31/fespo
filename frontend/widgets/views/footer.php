<footer class="footer">
    <div class="center-wrapper">
        <div class="footer__row">
            <?php if(!empty($footerMenus)): ?>
                <a href="<?=\yii\helpers\Url::home()?>" class="footer-logo">Феспо</a>
                    <nav class="footer-menu">
                        <ul class="footer-menu__list">
                            <?php foreach ($footerMenus as $menu): ?>
                                <li><a href="<?=$menu->link?>"><?=$menu->title?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
            <?php endif; ?>
        </div>
    </div><!-- end center-wrapper -->
</footer><!-- end footer -->