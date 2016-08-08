<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace tyus\gcmsextjs;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ExtjsAsset extends AssetBundle
{
    public $sourcePath = '@vender/gcms/extjs';
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
