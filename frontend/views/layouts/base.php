<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@frontend/views/layouts/_clear.php')
?>
<div class="">
<!--     <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]); ?>
    <?php echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => Yii::t('frontend', 'Home'), 'url' => ['/site/index']],
            ['label' => Yii::t('frontend', 'About'), 'url' => ['/page/view', 'slug'=>'about']],
            ['label' => Yii::t('frontend', 'Articles'), 'url' => ['/article/index']],
            ['label' => Yii::t('frontend', 'Contact'), 'url' => ['/site/contact']],
            ['label' => Yii::t('frontend', 'Signup'), 'url' => ['/user/sign-in/signup'], 'visible'=>Yii::$app->user->isGuest],
            ['label' => Yii::t('frontend', 'Login'), 'url' => ['/user/sign-in/login'], 'visible'=>Yii::$app->user->isGuest],
            [
                'label' => Yii::$app->user->isGuest ? '' : Yii::$app->user->identity->getPublicIdentity(),
                'visible'=>!Yii::$app->user->isGuest,
                'items'=>[
                    [
                        'label' => Yii::t('frontend', 'Settings'),
                        'url' => ['/user/default/index']
                    ],
                    [
                        'label' => Yii::t('frontend', 'Backend'),
                        'url' => Yii::getAlias('@backendUrl'),
                        'visible'=>Yii::$app->user->can('manager')
                    ],
                    [
                        'label' => Yii::t('frontend', 'Logout'),
                        'url' => ['/user/sign-in/logout'],
                        'linkOptions' => ['data-method' => 'post']
                    ]
                ]
            ],
            [
                'label'=>Yii::t('frontend', 'Language'),
                'items'=>array_map(function ($code) {
                    return [
                        'label' => Yii::$app->params['availableLocales'][$code],
                        'url' => ['/site/set-locale', 'locale'=>$code],
                        'active' => Yii::$app->language === $code
                    ];
                }, array_keys(Yii::$app->params['availableLocales']))
            ]
        ]
    ]); ?>
    <?php NavBar::end(); ?> -->

            <div class="top-bar">
            <div class="container">
                <div class="row pv15 pl10">
                    <div class="col-md-3">
                        <div class="img-logo">
                            <a href="<?php echo \yii\helpers\Url::toRoute('index')?>">
                                <img src="<?php echo yii::getAlias('@web'. "/theme/img/logos/index-blogger.png") ?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <div class="search_form">
                            <div class="col-md-2 pv20">
                                <button type="button" class="btn btn-primary bg-primary clr-white">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                            <div class="col-md-10">
                                
                                <form action="" method="" accept-charset="utf-8">
                                    <div class="input-group input-group pv20">
                                          <input type="text" class="form-control bg-primary clr-white sec_plac" placeholder="Search" aria-describedby="sizing-addon1">
                                          <span class="input-group-addon bg-primary" id="sizing-addon1">
                                          <a href="#" class="clr-white sec_fe_a">
                                              <i class="fa fa-search"></i>
                                          </a>
                                        </span>
                                        </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pv20">
                        <a href="<?php echo url::to(['../../backend/web'])?>" class="btn btn-primary bg-primary clr-white ph20"> Staff login</a>
                    </div>
                </div>            
            </div>
        
        <header class="custom-navbar">
            <div class="navbar before-affix">
                <div class="container">
                    
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav ">
                            <li class="">
                                <a href="<?php echo \yii\helpers\Url::toRoute('index')?>"> Home
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="<?php echo \yii\helpers\Url::toRoute('aboutus')?>" data-toggle="dropdown" data-submenu="data-submenu" aria-expanded="false" class="dropdown-toggle"> About Us
                                    <span class="fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu click-toggle-nav">
                                        <a data-toggle="dropdown" data-submenu="data-submenu" aria-expanded="false" class="dropdown-toggle"> About
                                            
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="<?php echo \yii\helpers\Url::toRoute('contact')?>"> Contact
                                            
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown"> Gallery
                                            
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown"> Team
                                            
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown"> Services
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown"> Login
                                            
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" data-submenu="data-submenu" aria-expanded="false" class="dropdown-toggle"> Education and Reserch
                                    <span class="fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown"> Icons
                                            
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown"> Sliders
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown"> Counters
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown"> Headers
                                            
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown"> Sidebars
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" data-submenu="data-submenu" aria-expanded="false" class="dropdown-toggle"> News
                                    <span class="fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a href="#" > Box
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" > Box(gutter)
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" > Wide
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" > Wide(gutter)
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" data-submenu="data-submenu" aria-expanded="false" class="dropdown-toggle"> Quick Links
                                    <span class="fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown"> 2 Columnns
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-col-3.html"> 3 Columns</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" data-submenu="data-submenu" aria-expanded="false" class="dropdown-toggle"> Join Us
                                    <span class="fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a href="#" data-toggle="dropdown"> 2 Columnns
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-col-3.html"> 3 Columns</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown menu-large">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Hospital and Services
                                    <span class="fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu megamenu row">
                                    <li class="col-sm-12 col-md-3">
                                        <ul>
                                            <li>
                                                <a href="index-mp-football.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>FootBall Club</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-creative.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Creative</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-business.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Business</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-business.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Business-2</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-fitness.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Fitness</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-app.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>App Full Page</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-shopping.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Shopping</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-church.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Church</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-car-product.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Car Product</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-12 col-md-3">
                                        <ul>
                                            <li>
                                                <a href="index-mp-charity.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Charity</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-medical.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Medical</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-hosting.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Hosting</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-restaurant.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Restaurant</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-lawyers.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Lawyers</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-band.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Music Band</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-fashion.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Fashion</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-r-work.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Freelancing</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-12 col-md-3">
                                        <ul>
                                            <li>
                                                <a href="index-mp-freelancer.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Freelacner</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-construction.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Construction</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-education.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Education</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-taxi.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Texi</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-transport.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Transport</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-saloon.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Saloon</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-agency.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Agency</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-dating.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Dating</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-12 col-md-3">
                                        <ul>
                                            <li>
                                                <a href="index-mp-spa.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Spa</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-wedding.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Wedding</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-photography.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Photography</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-travel.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Travel</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-blogger.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Blogger</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-fixit.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Fixit</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-corportate.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>Corporate</a>
                                            </li>
                                            <li>
                                                <a href="index-mp-business-3.html" class="text-capitalize">
                                                    <i class="fa fa-angle-right pr10"></i>business 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="<?php echo Url::toRoute('contact') ?>"> Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        </div>


    <?php echo $content ?>

</div>
        <!--========================= FOOTER SECTION: STARTS HERE =========================-->
<footer>
    <div id="footer-transport">
        <div class="bg-black pv36">
            <div class="container">
                <div class="row mv40">
                        <div class="col-md-12 footer-links">                                
                            <div class="col-md-4 box1">
                                <a href="<?php echo \yii\helpers\Url::toRoute('aboutus')?>" title="">About Us</a>
                            </div>
                            <div class="col-md-4 box2">
                                <a href="" title="<?php echo \yii\helpers\Url::toRoute('accreditations')?>">Our Accreditations</a>
                            </div>
                            <div class="col-md-4 box3">
                                <a href="<?php echo \yii\helpers\Url::toRoute('aboutus')?>" title="">National Insurance Scheme</a>
                            </div>
                        </div>
                </div>    
                <div class="row">
                    <div>
                        <div class="col-md-4 ">
                            <div class="col-md-12">
                                <div class="row first-column">
                                    <div class="col-md-12">
                                        <div class="mv30">
                                            <h2 class="fs30 clr-white ls1 text-uppercase fw100"><?php echo Yii::$app->name ?></h2>
                                        </div>
                                    </div>
                                    <div class="col-md-12 para-footer">
                                        <p class="clr-white fs14 ls2 line-height-custom">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <a href="#" class="mt20 button-downloadd btn btn-lg">Download Template!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mv30">
                                            <h3 class="clr-white ls1 text-uppercase fs17">Recent Facebook post</h3>
                                        </div>
                                        <div class="links">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#" class="links">
                                                        <i class="fa fa-angle-right">&nbsp</i>
                                                        <span>Blog Post</span>
                                                    </a>
                                                </li>
                                                <div class="separator-footer"></div>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-angle-right">&nbsp</i>
                                                        <span>Vimeo Video Post</span>
                                                    </a>
                                                </li>
                                                <div class="separator-footer"></div>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-angle-right">&nbsp</i>
                                                        <span>Recent Tweets</span>
                                                    </a>
                                                </li>
                                                <div class="separator-footer"></div>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-angle-right">&nbsp</i>
                                                        <span>YouTube Video Post</span>
                                                    </a>
                                                </li>
                                                <div class="separator-footer"></div>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-angle-right">&nbsp</i>
                                                        <span>Blog Audio Post</span>
                                                    </a>
                                                </li>
                                                <div class="separator-footer"></div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 tags-section">
                            <div class="col-md-12">
                                <div class="mv30">
                                    <h3 class="clr-white ls1 text-uppercase fs17">Recent Twitter post</h3>
                                </div>
                            </div>
                            <div id="tags" class="col-md-12">
                                <p>
                                    <a class="twitter-timeline" href="https://twitter.com/shahzadnagri99" data-widget-id="692009344662138881">Tweets by @shahzadnagri99</a>
                                    <script>
                                    ! function(d, s, id)
                                    {
                                      var js, fjs = d.getElementsByTagName(s)[0],
                                        p = /^http:/.test(d.location) ? 'http' : 'https';
                                      if (!d.getElementById(id))
                                      {
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = p + "://platform.twitter.com/widgets.js";
                                        fjs.parentNode.insertBefore(js, fjs);
                                      }
                                    }(document, "script", "twitter-wjs");
                                    </script>
                                  </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                <div>
        <div id="footer-end">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mv40">
                            <h3 class="ls1 clr-secound fw100">&copy; <?php echo Yii::$app->name ?> All Rights Reserved <?php echo date("Y"); ?></h3>
                        </div>
                    </div>
                    <div class="col-md-6 mv10">
                        <div class="text-center pull-right">
                            <a href="#">
                                <div class="icon facebook">
                                    <i class="fa fa-facebook"></i>
                                </div>
                            </a>
                            <a href="#">
                                <div class="icon twitter">
                                    <i class="fa fa-twitter"></i>
                                </div>
                            </a>
                            <a href="#">
                                <div class="icon google">
                                    <i class="fa fa-google-plus"></i>
                                </div>
                            </a>
                            <a href="#">
                                <div class="icon linked">
                                    <i class="fa fa-linkedin"></i>
                                </div>
                            </a>
                            <a href="#">
                                <div class="icon pin">
                                    <i class="fa fa-tumblr"></i>
                                </div>
                            </a>
                            <a href="#">
                                <div class="icon youtube">
                                    <i class="fa fa-youtube"></i>
                                </div>
                            </a>
                            <a href="#">
                                <div class="icon inst">
                                    <i class="fa fa-instagram"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php $this->endContent() ?>