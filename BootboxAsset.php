<?php

namespace ts\ace;

use yii\web\View;

/**
 * Ace v1.3.3
 *
 * Ace bootbox configuration
 *
 * @author Haisen <thirsight@gmail.com>
 * @since 1.0
 */
class BootboxAsset extends \ts\ace\AssetBundle
{
    public $sourcePath = '@ts/ace/assets';

    public $depends = [
        'ts\ace\AceAsset'
    ];

    public $jsEnhance = [
        'js/bootbox.js'
    ];
}
