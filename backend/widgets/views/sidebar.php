<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="/admin_assets/images/users/user.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="username text-muted mt-1"><?=Yii::$app->user->identity->username?></div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">
                <li class="menu-title">Таблицы</li>
                <li>
                    <a href="<?=\yii\helpers\Url::to(['/menu'])?>">
                        <i class="fas fa-comments"></i>
                        <span>Меню</span>
                        <span class="badge bg-success rounded-pill float-end"><?=\common\components\StaticFunctions::getTableCounts('menu')?></span>
                    </a>
                </li>
                <li>
                    <a href="<?=\yii\helpers\Url::to(['/settings'])?>">
                        <i class="fas fa-cog"></i>
                        <span>Настройки</span>
                        <span class="badge bg-success rounded-pill float-end"><?=\common\components\StaticFunctions::getTableCounts('settings')?></span>
                    </a>
                </li>
                <li>
                    <a href="<?=\yii\helpers\Url::to(['/promo-slider'])?>">
                        <i class="fas fa-sliders-h"></i>
                        <span>Слайдер - промо</span>
                        <span class="badge bg-success rounded-pill float-end"><?=\common\components\StaticFunctions::getTableCounts('promo_slider')?></span>
                    </a>
                </li>
                <li>
                    <a href="<?=\yii\helpers\Url::to(['/articles'])?>">
                        <i class="fas fa-newspaper"></i>
                        <span>Статьи</span>
                        <span class="badge bg-success rounded-pill float-end"><?=\common\components\StaticFunctions::getTableCounts('articles')?></span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
