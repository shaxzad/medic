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
                    $this->title = 'Overview';
                    $this->params['breadcrumbs'][] = "Join Us";
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
                    <h3>Join Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                    <ul>
                        <li>Tax-free salary</li>
                        <li>​​Tax-free salary</li>
                        <li>Subsidized healthcare for you and your family</li>
                        <li>End of service award</li>
                        <li>Round-trip annual leave ticket per year to the country you were recruited from</li> 
                        <li>Housing allowance</li>
                        <li>F​urniture allowance</li>
                        <li>Transport allowance</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>