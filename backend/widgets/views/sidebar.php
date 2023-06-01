<?php

use common\components\StaticFunctions;
use yii\helpers\Url;

?>
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
                    <a href="<?= Url::to(['/main-page'])?>">
                        <i class="fas fa-home"></i>
                        <span>Главная страница</span>
                        <span class="badge bg-success rounded-pill float-end"><?= StaticFunctions::getTableCounts('main_page')?></span>
                    </a>
                </li>
                <li>
                    <a href="#heatingField" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                        <i class="fas fa-heading"></i>
                        <span> Подогрев полей </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="heatingField">
                        <ul class="nav-second-level">
                            <li>
                                <a href="<?= Url::to(['/heating-navigation'])?>">
                                    <i class="fe-navigation"></i>
                                    <span>Навигация</span>
                                    <span class="badge bg-success rounded-pill float-end"><?= StaticFunctions::getTableCounts('heating_navigation')?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/heating-blocks'])?>">
                                    <i class="fas fa-blog"></i>
                                    <span>Блоки</span>
                                    <span class="badge bg-success rounded-pill float-end"><?= StaticFunctions::getTableCounts('heating_blocks')?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?= Url::to(['/projects'])?>">
                        <i class="fab fa-r-project"></i>
                        <span>Проекты</span>
                        <span class="badge bg-success rounded-pill float-end"><?= StaticFunctions::getTableCounts('projects')?></span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['/articles'])?>">
                        <i class="fas fa-newspaper"></i>
                        <span>Статьи</span>
                        <span class="badge bg-success rounded-pill float-end"><?= StaticFunctions::getTableCounts('articles')?></span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['/about-company'])?>">
                        <i class="fas fa-info-circle"></i>
                        <span>О компании</span>
                        <span class="badge bg-success rounded-pill float-end"><?= StaticFunctions::getTableCounts('about_company')?></span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['/contacts-page'])?>">
                        <i class="far fa-address-card"></i>
                        <span>Контакты</span>
                        <span class="badge bg-success rounded-pill float-end"><?= StaticFunctions::getTableCounts('contacts_page')?></span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['/menu'])?>">
                        <i class="fas fa-bars"></i>
                        <span>Меню</span>
                        <span class="badge bg-success rounded-pill float-end"><?= StaticFunctions::getTableCounts('menu')?></span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['/orders'])?>">
                        <i class="fas fa-envelope-open-text"></i>
                        <span>Заказы</span>
                        <span class="badge bg-success rounded-pill float-end"><?= StaticFunctions::getTableCounts('orders')?></span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['/letters'])?>">
                        <i class="fas fa-image"></i>
                        <span>Письма</span>
                        <span class="badge bg-success rounded-pill float-end"><?= StaticFunctions::getTableCounts('letters')?></span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['/user'])?>">
                        <i class="fas fa-users"></i>
                        <span>Пользователи</span>
                        <span class="badge bg-success rounded-pill float-end"><?= StaticFunctions::getTableCounts('user')?></span>
                    </a>
                </li>
                <li>
                    <a href="#sidebarSliders" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                        <i class="fas fa-sliders-h"></i>
                        <span> Слайдеры </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSliders">
                        <ul class="nav-second-level">
                            <li>
                                <a href="<?= Url::to(['/main-slider'])?>">
                                    <span>Слайдер - главная </span>
                                    <span class="badge bg-success rounded-pill float-end"><?= StaticFunctions::getTableCounts('main_slider')?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/heating-slider'])?>">
                                    <span>Слайдер - подогрев</span>
                                    <span class="badge bg-success rounded-pill float-end"><?= StaticFunctions::getTableCounts('heating_slider')?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/projects-slider'])?>">
                                    <span>Слайдер - проекты</span>
                                    <span class="badge bg-success rounded-pill float-end"><?= StaticFunctions::getTableCounts('projects_slider')?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/work-slider'])?>">
                                    <span>Слайдер - работа</span>
                                    <span class="badge bg-success rounded-pill float-end"><?= StaticFunctions::getTableCounts('work_slider')?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
