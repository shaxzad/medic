<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@frontend/views/layouts/_clear.php')
?>
<div class="">
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
                                <button type="button" class="btn btn-primary bdr0 bg-primary clr-white">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                            <div class="col-md-10">
                                
                                <form action="" method="" accept-charset="utf-8">
                                    <div class="input-group input-group pv20">
                                          <input type="text" class="form-control bdr0 bg-primary clr-white sec_plac" placeholder="Search" aria-describedby="sizing-addon1">
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
                        <a href="<?php echo url::to(['../../backend/web'])?>" class="btn btn-primary bg-primary clr-white bdr0 ph20"> Staff login</a>
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
                                        <a   href="<?php echo Url::toRoute('our-organization') ?>"> Our Organization
                                            
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="<?php echo Url::toRoute('our-people') ?>" data-toggle="dropdown"> Our People
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="<?php echo Url::toRoute('accreditations') ?>" data-toggle="dropdown"> Our Accreditations
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="<?php echo Url::toRoute('stars-excelence') ?>" data-toggle="dropdown"> Stars Of Excellence
                                            
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="<?php echo Url::toRoute('our-partners') ?>" data-toggle="dropdown"> Our Partners
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="<?php echo Url::toRoute('find-more') ?>" data-toggle="dropdown"> Find Out more
                                            
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
                                        <a href="<?php echo Url::toRoute('acadmic-system') ?>" data-toggle="dropdown">
                                           Acadmic Health System
                                            
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="<?php echo Url::toRoute('medical-education') ?>" data-toggle="dropdown">
                                            Medical Education
                                            
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="<?php echo Url::toRoute('medical-reserch') ?>" data-toggle="dropdown">
                                            Medical Research
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="<?php echo Url::toRoute('translation-reserch') ?>" data-toggle="dropdown"> Translational Research Institute
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="<?php echo Url::toRoute('hamad-training-center') ?>" data-toggle="dropdown"> Training center
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
                                        <a href="#" > Press Releses
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" > Media Library
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" > Media Contact Information
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
                                        <a href="<?php echo Url::toRoute('hmc-vendors') ?>" data-toggle="dropdown"> HMC Vendors
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Url::toRoute('health-care') ?>"> Health Care</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" data-submenu="data-submenu" aria-expanded="false" class="dropdown-toggle"> Join Us
                                    <span class="fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a href="<?php echo Url::toRoute('overview') ?>" data-toggle="dropdown"> Overview
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="<?php echo Url::toRoute('qatrization') ?>" data-toggle="dropdown"> Qatrization
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="<?php echo Url::toRoute('staff-testimonial') ?>" data-toggle="dropdown"> Staff Testimonial
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="<?php echo Url::toRoute('edu-training') ?>" data-toggle="dropdown"> Education and Training
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="<?php echo Url::toRoute('oppertunites-work') ?>" data-toggle="dropdown"> Oppertunites To work with
                                        </a>
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
                                                <a href="<?php echo Url::toRoute('al-khor-hospital') ?>" class="text-capitalize">
                                                    Al Khor Hospital</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Url::toRoute('al-wakra-hospital') ?>" class="text-capitalize">
                                                    Al wakra Hospital</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Url::toRoute('ambulatory-care-center') ?>" class="text-capitalize">
                                                    Ambulatory Care Center</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Url::toRoute('communicable-disease-center') ?>" class="text-capitalize">
                                                    Communicable Disease Center</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Url::toRoute('hamad-general-hospital') ?>" class="text-capitalize">
                                                    Hamad General Hospital</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-12 col-md-3">
                                        <ul>
                                            <li>
                                                <a href="<?php echo Url::toRoute('heart-hospital') ?>" class="text-capitalize">
                                                    Heart Hospital</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Url::toRoute('ncccr') ?>" class="text-capitalize">
                                                    NCCCR</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Url::toRoute('qatar-metabolic-institute') ?>" class="text-capitalize">
                                                    Qatar Metabolic Institute</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Url::toRoute('qatar-rehabilitation-institute') ?>" class="text-capitalize">
                                                    Qatar rehabilitation Institue</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Url::toRoute('rumailah-hospital') ?>" class="text-capitalize">
                                                    Rumailah Hospital</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-12 col-md-3">
                                        <ul>
                                            <li>
                                                <a href="<?php echo Url::toRoute('cuban-hospital') ?>" class="text-capitalize">
                                                    The Cuban Hospital</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Url::toRoute('womens-hospital') ?>" class="text-capitalize">
                                                    Women`s Hospital</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Url::toRoute('women-reserch-center') ?>" class="text-capitalize">
                                                    Women`s Wellness and Reserch Center</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Url::toRoute('continuing-care') ?>" class="text-capitalize">
                                                    Continuing Care</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Url::toRoute('tabacco-control-center') ?>" class="text-capitalize">
                                                    Tabacco Control Center</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-12 col-md-3">
                                        <ul>
                                            <li>
                                                <a href="<?php echo Url::toRoute('enya-specialized-care') ?>" class="text-capitalize">
                                                    Enya Specialized Care Center</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Url::toRoute('expansion-plus') ?>" class="text-capitalize">
                                                    Expansion Plus</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Url::toRoute('medical-affairs-offic') ?>" class="text-capitalize">
                                                    International Medical Affairs Office</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Url::toRoute('nursing') ?>" class="text-capitalize">
                                                    Nursing</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Url::toRoute('pecs') ?>" class="text-capitalize">
                                                    PECS</a>
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
                                <a href="<?php echo Url::toRoute('aboutus')?>" title="">About Us</a>
                            </div>
                            <div class="col-md-4 box2">
                                <a href="<?php echo Url::toRoute('accreditations')?>" title="">Our Accreditations</a>
                            </div>
                            <div class="col-md-4 box3">
                                <a href="<?php echo Url::toRoute('aboutus')?>" title="">National Insurance Scheme</a>
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
                                            <div class="img-logo">
                                                <a href="<?php echo \yii\helpers\Url::toRoute('index')?>">
                                                    <img src="<?php echo yii::getAlias('@web'. "/theme/img/logos/index-blogger.png") ?>">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 para-footer">
                                        <p class="clr-white fs14 ls2 line-height-custom">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
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