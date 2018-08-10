<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */
?>


<div class="hpx-72"></div>

<div class="mv80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h2 class="fs40 fw100 clr-primary ls1">Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-primary">
    <div id="contactus"></div>
    <div style="background: url(img/company/paterns/03.png)" class="paterns">
        <div class="container">
            <div class="row mv80">
                <div class="col-md-8 col-md-offset-2">
                    <div id="myForm" class="blog-form">
                        <form action="#" novalidate="novalidate" data-toggle="validator" class="contact-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="inputName" placeholder="first name**" required="required" class="no-radius form-business form-input form-control pv25 clr-white form-company inputName" />
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea rows="6" id="inputName2" placeholder="Message**" required="required" class="form-business form-input form-control pv25 clr-white form-company inputName"></textarea>
                                    <div class="help-block with-errors"></div>
                                    <div class="mt15"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-offset-8">
                                <button type="submit" class="btn btn-block form-btn no-radius pv15 fs15 letter-spacing-1 clr-white">SUBMIT HERE!</button>
                            </div>
                        </form>
                    </div>
                </div>
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
