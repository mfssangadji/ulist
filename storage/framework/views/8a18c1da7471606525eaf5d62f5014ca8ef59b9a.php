<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - Control Panel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/animate/animate.css')); ?>">	
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/css-hamburgers/hamburgers.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/animsition/css/animsition.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/select2/select2.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/daterangepicker/daterangepicker.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/util.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/main.css')); ?>">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" method="post" action="loginpost">
					<?php echo csrf_field(); ?>
					<span class="login100-form-title p-b-43">
						Login
					</span>
					<div class="wrap-input100 rs1">
						<input class="input100" type="email" name="email">
						<span class="label-input100">Email</span>
					</div>
					<div class="wrap-input100 rs2">
						<input class="input100" type="password" name="password">
						<span class="label-input100">Password</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="btn_l">
							Login
						</button>
					</div>
					<div class="text-center w-full p-t-23">
						<a href="#" class="txt1">
							Lupa password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="<?php echo e(asset('vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendor/animsition/js/animsition.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendor/bootstrap/js/popper.js')); ?>"></script>
	<script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendor/select2/select2.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendor/daterangepicker/moment.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendor/daterangepicker/daterangepicker.js')); ?>"></script>
	<script src="<?php echo e(asset('vendor/countdowntime/countdowntime.js')); ?>"></script>
	<script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\scripty\ulis\resources\views/auths/login.blade.php ENDPATH**/ ?>