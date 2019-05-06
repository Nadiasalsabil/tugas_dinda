<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login || Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url("loginasset/images/icons/favicon.ico"); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("loginasset/vendor/bootstrap/css/bootstrap.min.css"); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("loginasset/fonts/font-awesome-4.7.0/css/font-awesome.min.css"); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("loginasset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css"); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("loginasset/vendor/animate/animate.css"); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("loginasset/vendor/css-hamburgers/hamburgers.min.css"); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("loginasset/vendor/animsition/css/animsition.min.css"); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("loginasset/vendor/select2/select2.min.css"); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("loginasset/vendor/daterangepicker/daterangepicker.css"); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("loginasset/css/util.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("loginasset/css/main.css"); ?>">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">
					<span class="login100-form-title p-b-43">
						Login Admin
					</span>
					
					
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						
					</div>

			

					<div class="container-login100-form-btn">
						<button  type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
				</form>

				<div class="login100-more" style="background-image: url(<?php echo base_url('bootstrap/images/admin.png') ?>);">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="<?php echo base_url("loginasset/loginasset/vendor/jquery/jquery-3.2.1.min.js");?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("loginasset/loginasset/vendor/animsition/js/animsition.min.js");?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("loginasset/loginasset/vendor/bootstrap/js/popper.js");?>"></script>
	<script src="<?php echo base_url("loginasset/loginasset/vendor/bootstrap/js/bootstrap.min.js");?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("loginasset/loginasset/vendor/select2/select2.min.js");?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("loginasset/loginasset/vendor/daterangepicker/moment.min.js");?>"></script>
	<script src="<?php echo base_url("loginasset/loginasset/vendor/daterangepicker/daterangepicker.js");?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("loginasset/loginasset/vendor/countdowntime/countdowntime.js");?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("loginasset/loginasset/js/main.js");?>"></script>

</body>
</html>