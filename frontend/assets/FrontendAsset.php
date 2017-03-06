<?php
/**
 * Created by PhpStorm.
 * User: oltro
 * Date: 01.03.17
 * Time: 2:31
 */

namespace frontend\assets;

use yii\web\AssetBundle;



class FrontendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/style.css',
    ];

    public $js = [
        'js/app.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'common\assets\Html5shiv',
    ];
}
