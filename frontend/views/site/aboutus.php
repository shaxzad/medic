<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */
?>

 <section>
    <div class="container">
		<?php 
	        $this->title = 'About us';
	        $this->params['breadcrumbs'][] = $this->title;
	     ?>
        <div class="row mb50 mt10">
            <div class="col-md-12">
                <div class="tab1">
                    <div role="tabpanel" id="#myTab" class="nav nav-tabs">
                        <ul role="tablist" class="nav nav-tabs">
                            <li role="presentation" class="active">
                                <a href="#1tab" aria-controls="1tab" role="tab" data-toggle="tab">Our Partners</a>
                            </li>
                            <li role="presentation">
                                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Academic health Partners</a>
                            </li>
                            <li role="presentation">
                                <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Accreditation Partners</a>
                            </li>
                            <li role="presentation">
                                <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Other Partners</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" id="1tab" class="tab-pane fade in active">
                                <div class="tab-status">
                                    <h4>Business Flow</h4>
                                    <img src="<?php echo yii::getAlias('@web'). '/theme/img/contact/aboutus1.jpg'; ?>" alt="">
                                    <p>
                                        Lorem ipsum dolor sit nekores, conse acing elit, sed do eiusmod ds tempor incididunt ut labore et dfdsf dolore magna aliqua. Ut enim ad minim veniam, quis.
                                    </p>
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