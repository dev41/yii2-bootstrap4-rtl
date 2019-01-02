<?php

namespace baccano\bootstrap;

use yii\web\AssetBundle;

class Bootstrap4RtlAsset extends AssetBundle
{
    public $sourcePath = '@vendor/baccano/yii2-bootstrap4-rtl/css';

    /**
     * @var array
     */
    public $css = [
        'bootstrap.min.css',
        'bootstrap-reboot.min.css',
    ];

    /**
     * @var array
     */
    public $depends = [
    ];
}