<?php

namespace baccano\bootstrap;

use yii\web\AssetBundle;

class Bootstrap4RtlAsset extends AssetBundle
{
    public $sourcePath = '@vendor/twbs/bootstrap/dist';

    /**
     * @var array
     */
    public $css = [
        'css/bootstrap.css',
        'css/bootstrap-reboot.css',
    ];

    /**
     * @var array
     */
    public $depends = [
//        'yii\bootstrap\BootstrapPluginAsset',
    ];
}