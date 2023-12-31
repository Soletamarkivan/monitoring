﻿<?php
include "db_connection.php";
include "code_login.php";

if (isset($_SESSION['usertype'])) {

	if ($_SESSION['usertype'] == 'admin') {
		header('location: admin_page.php');
	} else if ($_SESSION['usertype'] == 'supervisor') {
		header('location: supervisor_page.php');
	}
}
?>


<head>
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:title" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:description" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:image" content="https://zenix.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	<title>Zenix - Crypto Admin Dashboard </title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<style>
		.bg_container {
			position: absolute;
			z-index: -1;
			/* border: 1px solid red; */
			height: 100vh;
			width: 100vw;
		}

		.bg_container>img {

			height: 100%;
			width: 100%;
		}

		.login_container {
			box-shadow: 10px 10px 30px black;
			border-radius: 20px;
			background-color: #171205;
			opacity: 3;

		}
	</style>

</head>

<body class="vh-100">
	<div class="bg_container">
		<img src="https://www.rollingstone.com/wp-content/uploads/2020/04/shutterstock_777733171.jpg" alt="">
	</div>

	<div class="authincation h-100">
		<div class="container h-100">
			<div class="row justify-content-center h-100 align-items-center">
				<div class="col-md-6">
					<div class="text-light login_container">
						<div class="row no-gutters">
							<div class="col-xl-12">
								<div class="auth-form">
									<div class="text-center mb-3">
										<!-- <img src="images/logo-full.png" alt=""> -->
									</div>

									<h4 class="text-center text-light mb-4">Sign in your account</h4>

									<!-- NOTIF FOR Credentials -->
									<?php echo $notif ?>
									<form method="POST">
										<div class="form-group">
											<label class="mb-1"><strong>Username</strong></label>
											<input type="text" name="txt_username" class="form-control" placeholder="Enter Username">
										</div>
										<div class="form-group">
											<label class="mb-1"><strong>Password</strong></label>
											<input type="password" name="txt_password" class="form-control" placeholder="Enter Password">
										</div>
										<div class="form-row d-flex justify-content-between mt-4 mb-2">
											<div class="form-group">
												<div class="custom-control custom-checkbox ml-1">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Remember
														my preference</label>
												</div>
											</div>
											<div class="form-group">
												<a href="page-forgot-password.html" class="text-light">Forgot
													Password?</a>
											</div>
										</div>
										<div class="text-center">
											<button type="submit" name="login_btn" id="login_btn" class="btn btn-dark btn-block">Sign In</button>
										</div>
									</form>
									<div class="new-account mt-3">
										<p>Don't have an account? <a class="text-light" href="page-register.html">Sign
												up</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>
</body>

</html>