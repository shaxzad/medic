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
                    $this->title = 'Opportunites to work';
                    $this->params['breadcrumbs'][] = "join us";
                    $this->params['breadcrumbs'][] = $this->title;
                 ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mb20">
                    <img src="<?php echo yii::getAlias('@web'). '/theme/img/joinus/1.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
                </div>
                <hr>
                <div class="mv30">
                    <h3>Welcome to Hamad Medical Corporation</h3>
                    <p>Whether you are interested in being a clinician, an engineer, an accountant, a driver or in any other career that contributes to improving the quality of human life, we encourage you to consider Hamad Medical Corporation (HMC) for your future career. We are Qatar’s leading healthcare provider to over two million expatriates and Qatari nationals living and working in Qatar. We are a diverse and exciting organization; over 90 different nationalities work together for the single purpose of improving the quality of human life through patient care, education and research.
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                </div>
            </div>
        </div>
    </div>
</section>