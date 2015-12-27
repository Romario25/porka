<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 23.12.15
 * Time: 13:07
 */

namespace app\assets;


use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since  2.0
 */
class AdminAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css		= [
        'css/site.css',
        'css/admin.css',
    ];
    public $js	= [
        'js/admin.js'
    ];
    public $depends
        = [
            'yii\web\YiiAsset',
            'yii\bootstrap\BootstrapAsset',
        ];
    public $jsOptions		= [
        'position' => \yii\web\View::POS_HEAD
    ];
}