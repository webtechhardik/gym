<html>
	<head>
		<title>The Avangers Gym</title>

		<link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
		<link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
		<link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

		<!-- Bootstrap CSS-->
		<link href="assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

		<!-- Vendor CSS-->
		<link href="assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
		<link href="assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
		<link href="assets/vendor/wow/animate.css" rel="stylesheet" media="all">
		<link href="assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
		<link href="assets/vendor/slick/slick.css" rel="stylesheet" media="all">
		<link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
		<link href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
		<link href="assets/css/theme.css" type="text/css" rel="stylesheet">

	</head>
	<body class="animsition">
		<div class="page-wrapper">
			<div class="page-content--bge5">
				<div class="container">
					<div class="login-wrap">
						<?php
						if(isset($_GET['msg'])){
							?>
							<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
								<span class="badge badge-pill badge-danger">Sorry</span>
								You successfully read this important alert.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<?php
						}
						?>
						<div class="login-content">
							<div class="login-logo">
								<a href="#">
									<h1>Shree Pitra Finance</h1>
								</a>
							</div>
							<div class="login-form">
								<form action="" method="post">
									<div class="form-group">
										<label for="username">User Name</label>
										<input type="text" class="au-input au-input--full" id="username" name="username" >
									</div>
									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" class="au-input au-input--full" id="password" name="password" >
									</div>
									<button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="login">LogIn</button>
								</form>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
	<!-- Jquery JS-->
	<script src="assets/vendor/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap JS-->
	<script src="assets/vendor/bootstrap-4.1/popper.min.js"></script>
	<script src="assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
	<!-- Vendor JS       -->
	<script src="assets/vendor/animsition/animsition.min.js"></script>

	<!-- Main JS-->
	<script src="assets/js/main.js"></script>
	</body>
</html>

