<?php

namespace tyus\gcmsextjs;

use yii\web\AssetBundle;

/**
 * @author Rany Huang <q529658851@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{
    public $sourcePath = __DIR__;
    // public $baseUrl = '@web';
    public $css = [
        'resources/Admin-all.css',
    ];
    public $js = [
    ];
    public $depends = [
    ];
}
