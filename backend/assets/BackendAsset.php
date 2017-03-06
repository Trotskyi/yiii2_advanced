<?php
/**
 * Created by PhpStorm.
 * User: oltro
 * Date: 01.03.17
 * Time: 2:31
 */

namespace backend\assets;


class BackendAsset
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/style.css'
    ];
    public $js = [
        'js/app.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'common\assets\AdminLte',
        'common\assets\Html5shiv'
    ];
}