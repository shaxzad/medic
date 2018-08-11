<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */
?>

 <section class="joinus">
    <div class="container">
        <?php 
            $this->title = 'HMC Vendors';
            $this->params['breadcrumbs'][] = "Quick Links";
            $this->params['breadcrumbs'][] = $this->title;
         ?>
        <div class="row mb50 mt10">
            <div class="col-md-12">
                <div class="tab1">
                    <div role="tabpanel" id="#myTab" class="nav nav-tabs">
                        <ul role="tablist" class="nav nav-tabs">
                            <li role="presentation" class="active">
                                <a href="#1tab" aria-controls="1tab" role="tab" data-toggle="tab">HMC Vendors</a>
                            </li>
                            <li role="presentation">
                                <a href="#2tab" aria-controls="1tab" role="tab" data-toggle="tab2">Supply Chain Managment</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" id="1tab" class="tab-pane fade in active">
                                <div class="tab-status">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb20">
                                                <img src="<?php echo yii::getAlias('@web'). '/theme/img/quicklinks/2.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="mv30">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                                            </div>  
                                        </div>
                                        <div class="col-md-4">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" id="profile" class="tab-pane fade">
                                <div class="tab-status">
                                    <h4>Web Developer</h4>
                                    <p>
                                        Lorem ipsum dolor sit nekores, conse acing elit, sed do eiusmod ds tempor incididunt ut labore et dfdsf dolore magna aliqua. Ut enim ad minim veniam, quis.
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" id="messages" class="tab-pane fade">
                                <div class="tab-status">
                                    <h4>Graphic Designer</h4>
                                    <p>
                                        Lorem ipsum dolor sit nekores, conse acing elit, sed do eiusmod ds tempor incididunt ut labore et dfdsf dolore magna aliqua. Ut enim ad minim veniam, quis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>