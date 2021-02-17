<!DOCTYPE html>
<?php
session_start();
include"koneksi.php";
?>
<html lang="in">
<head>
	<title>Toko Sanak - Computer</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="templatelogin/images/favicon.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="templatelogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="templatelogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="templatelogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="templatelogin/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(templatelogin/images/bg-01.png);">
					<span class="login100-form-title-1">
						Create Account
					</span>
				</div>

				<form class="login100-form validate-form" action="simpanakun.php" method="post" name="login" id="login">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="fullname" placeholder="Enter full name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Create
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>