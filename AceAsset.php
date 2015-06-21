<?php

namespace tsace;

use yii\web\View;

/**
 * Ace v1.3.3
 *
 * Ace configuration
 *
 * ~~~
 * 'layout' => 'admin',
 * 'aliases' => [
 *     '@tsace'  => '@common/soft/tsace'
 * ],
 * 'components' => [
 *     'assetManager' => [
 *         'bundles' => [
 *             'yii\web\JqueryAsset' => ['sourcePath' => null, 'js' => [], 'depends' => ['tsace\AceAsset']],
 *             'yii\bootstrap\BootstrapAsset' => false,
 *             'yii\bootstrap\BootstrapThemeAsset' => false,
 *             'yii\bootstrap\BootstrapPluginAsset' => false,
 *         ],
 *     ],
 *     'view' => [
 *         'theme' => [
 *             'pathMap' => [
 *                 '@app/views' => '@tsace/views',
 *                 '@tsace/views' => '@mdm/rbac/themes/ace',
 *                 '@mdm/rbac/views' => '@mdm/rbac/themes/ace',
 *             ],
 *         ],
 *     ],
 * ],
 * ~~~
 *
 * @author Haisen <thirsight@gmail.com>
 * @since 1.0
 */
class AceAsset extends \tsace\AssetBundle
{
    public $sourcePath = '@tsace/assets';

    public $cssEnhance = [
        'css/ts-bootstrap.css',
        'css/font-awesome.css',
        'css/ace-fonts.css',
        'css/ts-ace.css',
        'css/ts-ace-part2.css' => ['condition' => 'lte IE 9'],
        'css/ace-ie.css' => ['condition' => 'lte IE 9'],
    ];

    public $jsEnhance = [
        // if you need cookie support and sidebar collapse/expand, fixing navbar
        'ace-extra.js' => ['position' => View::POS_HEAD],

        'js/html5shiv.js' => ['position' => View::POS_HEAD, 'condition' => 'lte IE 8'],
        'js/respond.js' => ['position' => View::POS_HEAD, 'condition' => 'lte IE 8'],

        'js/jquery.js',
        'js/jquery1x.js' => ['condition' => 'IE'],
        'js/bootstrap.js',
        'js/excanvas.js' => ['condition' => 'lte IE 8'],
        'js/ts-ace.min.js',
    ];

    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);

        $js = <<<EDO

if('ontouchstart' in document.documentElement) document.write("<script src='{$this->baseUrl}/js/jquery.mobile.custom.js'>"+"<"+"/script>");

EDO;
        $view->registerJs($js, View::POS_END);
    }
}
