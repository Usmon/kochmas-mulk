<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="limiter">
        <div class="container-login100" style="background: white">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <?=Html::img('@web/maktab/css/regStyle/images/img-01.png',['alt'=>'IMG'])?>
                </div>

        <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                // 'layout' => 'horizontal',
                'class' => 'login100-form validate-form',
            ]); ?>
            <!-- <form class="login100-form validate-form"> -->
                <span class="login100-form-title">
                        Member Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <?= $form->field($model, 'username')->textInput(['class' =>'input100'],['placeholder' => 'Email'],['name'=>'email'],['type'=>'text']); ?>
                        <!-- <input class="input100" type="text" name="email" placeholder="Email"> -->
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        
                        <?= $form->field($model, 'password')->passwordInput(['class'=>'input100'],['type'=>'password'],['name'=>'pass'],['placeholder'=>'Password']) ?>
                        
                            <!-- <input class="input100" type="password" name="pass" placeholder="Password"> -->
                            
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                    </div>
                    
                    <div class="container-login100-form-btn">
                        
                        <?= Html::submitButton('Login', ['class' => 'login100-form-btn', 'name' => 'login-button']) ?>
                        <!-- <button class="login100-form-btn">Login</button> -->
                    
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Username / Password?
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            <?= Html::a('Create your Account', ['site/registration'], ['class' => 'txt2']) ?>
<!--                         <a class="txt2" href="#">
                            Create your Account
                        </a> -->
                    </div>

                 <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    ]) ?> 

        <?php ActiveForm::end(); ?>
                <!-- </form> -->
            </div>
        </div>
    </div>

    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

<?php
    $this->registerCssFile('@web/maktab/css/regStyle/fonts/font-awesome-4.7.0/css/font-awesome.min.css');
    $this->registerCssFile('@web/maktab/css/regStyle/vendor/animate/animate.css');
    $this->registerCssFile('@web/maktab/css/regStyle/vendor/css-hamburgers/hamburgers.min.css');
    $this->registerCssFile('@web/maktab/css/regStyle/vendor/select2/select2.min.css');
    $this->registerCssFile('@web/maktab/css/regStyle/css/util.css');
    $this->registerCssFile('@web/maktab/css/regStyle/css/main.css');
    $this->registerCssFile('@web/maktab/css/regStyle/images/icons/favicon.ico');

    $this->registerJsFile('@web/maktab/css/regStyle/vendor/jquery/jquery-3.2.1.min.js');
    $this->registerJsFile('@web/maktab/css/regStyle/vendor/bootstrap/js/popper.js');
    $this->registerJsFile('@web/maktab/css/regStyle/vendor/select2/select2.min.js');
    $this->registerJsFile('@web/maktab/css/regStyle/js/main.js');
    $this->registerJsFile('@web/maktab/css/regStyle/vendor/tilt/tilt.jquery.min.js');
?>






