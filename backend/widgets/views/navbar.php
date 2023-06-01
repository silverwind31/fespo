<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-end mb-0">

            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="/admin_assets/images/users/user.jpg" alt="user-image" class="rounded-circle" style="object-fit: cover; object-position: center">
                    <span class="pro-user-name ms-1">
                        <?=Yii::$app->user->identity->username?>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Добро пожаловать !</h6>
                    </div>

                    <!-- item-->
                    <a href="<?=\yii\helpers\Url::to('/site/logout')?>" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Выйти из аккаунта</span>
                    </a>

                </div>
            </li>
        </ul>
        <!-- LOGO -->
        <div class="logo-box">
            <a href="/" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <img src="/admin_assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="/admin_assets/images/logo-dark.png" alt="" height="20">
                </span>
            </a>

            <a href="/" class="logo logo-light text-center">
                <span class="logo-sm">
                    <img src="/admin_assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="/admin_assets/images/logo-light.png" alt="" height="20">
                </span>
            </a>
        </div>
        <!-- COLLAPSE TOOGLE -->
        <ul class="list-unstyled topnav-menu topnav-menu-left m-0 d-flex align-items-center gap-3">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>
            <li>
                <a href="/gii" class="btn btn-success">GII</a>
            </li>

        </ul>
        <div class="clearfix"></div>
    </div>
</div>


