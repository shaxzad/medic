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
                    $this->title = 'Education and Training';
                    $this->params['breadcrumbs'][] = "join Us";
                    $this->params['breadcrumbs'][] = $this->title;
                 ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mb20">
                    <img src="<?php echo yii::getAlias('@web'). '/theme/img/joinus/3.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
                </div>
                <hr>
            </div>
        </div>
        <div class="row" class="mb40">
            <div class="mv40">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo yii::getAlias('@web'). '/theme/img/joinus/3.jpg'; ?>" alt="" class="img-responsive mb40" style="">
                </div>
            </div>
            <div class="mv40">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo yii::getAlias('@web'). '/theme/img/joinus/3.jpg'; ?>" alt="" class="img-responsive mb40" style="">
                </div>
            </div>
        </div>

</section>