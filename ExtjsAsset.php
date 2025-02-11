<?php

namespace tyus\gcmsextjs;

use yii\web\AssetBundle;

/**
 * @author Rany Huang <q529658851@gmail.com>
 * @since 2.0
 */
class ExtjsAsset extends AssetBundle
{
    public $sourcePath = __DIR__;
    // public $baseUrl = '@web';
    public $css = [
        'classic/theme-triton/resources/theme-triton-all.css',
    ];
    public $js = [
    	'ext-all.js',
    	'classic/theme-classic/theme-classic.js'
    ];
    public $depends = [
    ];
}
