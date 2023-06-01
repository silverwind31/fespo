<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap',
        'styles/style.css',
    ];
    public $js = [
        "scripts/libs/slick.min.js",
        "scripts/libs/jquery.fancybox.min.js",
        "scripts/libs/jquery.inputmask.min.js",
        "scripts/main.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
