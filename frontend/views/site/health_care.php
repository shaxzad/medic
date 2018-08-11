<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */
?>

 <section class="joinus">
    <div class="container">
        <div class="row">
            <div class="col-md-12">        
                <?php 
                    $this->title = 'Health Care';
                    $this->params['breadcrumbs'][] = "Quick Links";
                    $this->params['breadcrumbs'][] = $this->title;
                 ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mb20">
                    <img src="<?php echo yii::getAlias('@web'). '/theme/img/quicklinks/1.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
                </div>
                <hr>
                <div class="mv30">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                </div>
            </div>
        </div>
    </div>
</section>