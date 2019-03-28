<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'maktab/fonts/font-awesome/css/font-awesome.min.css',
        'maktab/fonts/themify-icons/themify-icons.css',
        'maktab/css/owl.carousel.css',
        'maktab/css/price-range.css',
        'maktab/css/style.css',
        'maktab/css/responsive.css',
        'maktab/css/colors.css',
        'maktab/js/rs-plugin/css/settings.css',

    ];
    public $js = [
        'maktab/js/modernizr.js',
        'maktab/js/owl.carousel.min.js',
        'maktab/js/html5lightbox.js',
        'maktab/js/scrolly.js',
        'maktab/js/price-range.js',
        // 'maktab/js/infobox.js',
        // 'maktab/js/data.json',
        // 'maktab/js/markerclusterer.js',
        'maktab/js/script.js',
        //'maktab/js/markers-map.js',
        //'https://maps.googleapis.com/maps/api/js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
