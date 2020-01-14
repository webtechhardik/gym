<?php
session_start();
require_once 'classes/user.php';
require_once 'classes/db.php';
$db = new DB();
$user = new Users($db);
if(isset($_POST['login'])){
	if(empty($_POST['username']) || empty($_POST['password'])){
		$message = "<label>All fields are required</label>";
	}
	else{
		$valid_user = $user->authenticateUser();
		echo $valid_user;
		if($valid_user){
			$_SESSION["user_name"] = $valid_user;
			echo '<script> window.location="http://localhost/gym/"</script>';
		}
		else{
			echo '<script> window.location="http://localhost/gym/login.php?msg=invalid_login"</script>';
			$message = "<label>Invalid User</label>";
		}
	}
}?>
<html>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="gym managment system">
    <meta name="author" content="Hardik Sharma">
    <meta name="keywords" content="gym managment system">

    <!-- Title Page-->
    <title>Login Page</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

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
								<span class="badge badge-pill badge-danger">Sorry Invalid Login</span>
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
									<h1>Gym Managment System</h1>
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
        <script src="vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="vendor/slick/slick.min.js">
        </script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/animsition/animsition.min.js"></script>
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="vendor/circle-progress/circle-progress.min.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="vendor/select2/select2.min.js">
        </script>

        <!-- Main JS-->
        <script src="js/main.js"></script>
	</body>
</html>

