<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */
?>
<div class="container">
    <?php 
        $this->title = 'Contact';
        $this->params['breadcrumbs'][] = $this->title;
     ?>
    <div class="">
        <div style="background: url(<?php echo yii::getAlias('@web'). '/theme/img/contact/header.jpg'; ?>);height:400px !important" class="bg-cover slider-wow fadeIn">
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3> Customer Service </h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

                <div>
        <section class="bg-primary">
            <div id="contactus"></div>
            <div style="background: url(img/company/paterns/03.png)" class="paterns">
                <div class="container">
                    <div class="row mb80">
                        <div class="col-md-12">
                            <div class="text-center mt40">
                                <h2 class="clr-white text-uppercase fw300">contact us</h2>
                                <p class="clr-white">If any question just drop a message</p>
                                <span class="fs50 mb50 icon icon-basic-mail-open"></span>
                                <div class="mv30"></div>
                            </div>
                        </div>
                        <div class="col-md-10 col-md-offset-1">
                            <div class="blog-form">
                                <form action="#" novalidate="novalidate" data-toggle="validator" id="myForm" class="contact-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="inputName" placeholder="first name**" required="required" class="no-radius form-business form-input form-control pv25 clr-white form-company inputName" />
                                            <div class="help-block with-errors"></div>
                                            <div class="mt15"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="inputName2" placeholder="last name**" required="required" class="no-radius form-business form-input form-control pv25 clr-white form-company inputName" />
                                            <div class="help-block with-errors"></div>
                                            <div class="mt15"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="form-group">
                                            <input type="email" name="email" id="inputEmail" placeholder="Email**" data-e-rror="Bruh, that email address is invalid" required="required" class="no-radius form-business form-input form-control pv25 clr-white form-company input-field" />
                                            <div class="help-block with-errors"></div>
                                            <div class="mt15"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="inputName4" placeholder="Subject**" required="required" class="form-business form-input form-control pv25 clr-white form-company inputName" />
                                            <div class="help-block with-errors"></div>
                                            <div class="mt15"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea rows="6" id="inputName5" placeholder="Message**" required="required" class="form-business form-input form-control pv25 clr-white form-company inputName"></textarea>
                                            <div class="help-block with-errors"></div>
                                            <div class="mt15"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-block form-btn no-radius pv15 fs15 letter-spacing-1 clr-white">SUBMIT HERE!</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>                
                </div>            
            </div>
            
        </div>
    </div>
    <!-- <div class="mb80"></div> -->
    <section class="bg-secound">
        <div class="container">
            <div class="row mv50">
                <div class="col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <hr/>
                            </div>
                            <div class="col-md-12 col-sm-12 mv20">
                                <div class="col-md-4">
                                    <div class="m30 clr-primary">
                                        <div class="footer1 clr-primary">
                                            <div class="footer-content">
                                                <div class="footer-icon text-center">
                                                    <a href="#" class="icon-custom icon-primary icon-2x icon-clr-variant m20">
                                                        <i class="fa fa-phone"></i>
                                                    </a>
                                                </div>
                                                <div class="footer-content mt10">
                                                    <div class="footer-heading"></div>
                                                    <div class="footer-paragraph text-center fw200">
                                                        <p>+(400) 123445674445.... +500987654321</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="m40 clr-primary">
                                        <div class="footer1 clr-primary">
                                            <div class="footer-content">
                                                <div class="footer-icon text-center">
                                                    <a href="#" class="icon-custom icon-primary icon-2x icon-clr-variant m20">
                                                        <i class="fa fa-map-marker"></i>
                                                    </a>
                                                </div>
                                                <div class="footer-content mt10">
                                                    <div class="footer-heading"></div>
                                                    <div class="footer-paragraph text-center fw200">
                                                        <p>356 St.James Square, Covnet Garden England</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="m30 clr-primary">
                                        <div class="footer1 clr-primary">
                                            <div class="footer-content">
                                                <div class="footer-icon text-center">
                                                    <a href="#" class="icon-custom icon-primary icon-2x icon-clr-variant m20">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </a>
                                                </div>
                                                <div class="footer-content mt10">
                                                    <div class="footer-heading"></div>
                                                    <div class="footer-paragraph text-center fw200">
                                                        <p>+example@example.com #skype.example</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <hr/>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
