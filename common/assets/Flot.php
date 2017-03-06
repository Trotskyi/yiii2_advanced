<?php

/**
 * Created by PhpStorm.
 * User: oltro
 * Date: 02.03.17
 * Time: 21:49
 */

namespace common\assets;

use yii\web\AssetBundle;

class Flot extends AssetBundle
{
    public $sourcePath = '@bower/flot';
    public $js = [
        'jquery.flot.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}