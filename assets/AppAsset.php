<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       // 'css/site.css',
        'css/grid.css',
        'css/skin.css',
        'css/nice-select.css',
        //'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'
    ];

    public $js = [
        'js/modernizr-2.7.1.min.js',
        '/js/minify.min.js',
        '/js/no-hover.min.js',
        '/js/jquery.nice-select.min.js',
        'js/html5shiv.js',

    ];

    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
    public $cssOptions = [
        'position' => View::POS_LOAD
    ];

    public $depends = [
        'yii\web\YiiAsset',
      //  'yii\bootstrap\BootstrapAsset',
    ];
}
