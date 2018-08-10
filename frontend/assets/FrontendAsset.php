<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FrontendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/style.css',
        'theme/css/styles.css',
        'theme/css/medic.css',
        'theme/frameworks/font-awesome/css/font-awesome.css',
        'theme/frameworks/owl/owl.carousel.css',
        'theme/frameworks/owl/owl.theme.css',
        'theme/frameworks/owl/owl.transitions.css',
        'theme/frameworks/animate/animate.css'
    ];

    public $js = [
        'theme/frameworks/bootstrap/js/bootstrap.min.js',
        'js/app.js',
        'theme/frameworks/wow/dist/wow.js',
        'theme/frameworks/owl/owl.carousel.js',
        'theme/frameworks/mixitup/mixitup.js',

        'theme/frameworks/nav/jquery.nav.js',
        'theme/frameworks/fittext/jquery.fittext.js',
        'theme/frameworks/texts/jquery.textillate.js',
        'theme/frameworks/validater/validator.js',
        'theme/frameworks/circle-progress/circle-progress.js',
        'theme/frameworks/texts/typed.min.js',
        'theme/frameworks/countup/jquery.counterup.js',
        'theme/frameworks/countup/jquery.waypoints.min.js',
        'theme/frameworks/circleclock/TimeCircles.js',

        'theme/frameworks/countup/jquery.waypoints.min.js',
        'theme/frameworks/countup/jquery.counterup.js',
        'theme/frameworks/countdown/jquery.plugin.min.js',
        'theme/frameworks/countdown/jquery.countdown.js',
        'theme/frameworks/magnific-popup/jquery.magnific-popup.js',


        'theme/frameworks/isotope/dist/isotope.pkgd.js',
        'theme/frameworks/isotope/dist/horz.js',
        'theme/frameworks/isotope/dist/masonry.js',
        'theme/frameworks/isotope/js/relayout.js',
        'theme/frameworks/isotope/dist/colms.js',
        'theme/frameworks/isotope/js/layout-modes/fit-rows.js',

        'theme/js/owl.js',
        'theme/js/custom.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'common\assets\Html5shiv',
    ];
}
