<?php

/**
 * Created by PhpStorm.
 * User: oltro
 * Date: 02.03.17
 * Time: 21:47
 */

namespace common\assets;

use yii\web\AssetBundle;

class JquerySlimScroll extends AssetBundle
{
    public $sourcePath = '@bower/jquery-slimscroll';
    public $js = [
        'jquery.slimscroll.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
