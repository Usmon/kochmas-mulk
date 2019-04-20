<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form ActiveForm */
?>

<div class="container">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'login') ?>
        <?= $form->field($model, 'password')->passwordInput()?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-registration -->


<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<?=Html::img('@web/maktab/css/regStyle/images/img-01.png',['alt'=>'IMG'])?>
				</div>

				<?php $form = ActiveForm::begin(['class'=>'login100-form validate-form']); ?>
				<!-- <form class="login100-form validate-form"> -->
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input">
						
						<?= $form->field($model, 'name')->input(
								['type'=>'text'],
								['class'=>'input100'],
								['placeholder'=>'Name']
							) ?>

						<!-- <input class="input100" type="text" name="email" placeholder="Email"> -->
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" 	>
						<?= $form->field($model, 'email')->input(
								['type' => 'Email'],
								['class' => 'input100'],
								['placeholder' => 'Email']

							) ?>
						<!-- <input class="input100" type="password" name="pass" placeholder="Password"> -->
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
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
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				<!-- </form> --> <?php ActiveForm::end(); ?>
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