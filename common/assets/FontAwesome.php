<?php

/**
 * Created by PhpStorm.
 * User: oltro
 * Date: 02.03.17
 * Time: 21:46
 */

namespace common\assets;

use yii\web\AssetBundle;

class FontAwesome extends AssetBundle
{
    public $sourcePath = '@bower/font-awesome';
    public $css = [
        'css/font-awesome.min.css'
    ];
}
