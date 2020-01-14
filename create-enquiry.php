<?php
	session_start();
	require_once 'classes/db.php';
	require_once 'classes/enquiry.php';
	$msg = "";
	$db = new DB();
	$enquiry = new Enquiry($db);
	if(count($_POST)){
		$add_enquiry = $enquiry->addEnquiry();
		if($add_enquiry == '1'){
			$msg = "1";
		}else{
			$msg = "0";
		}
	}
?>
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
	<?php require_once ('templates/header.php'); ?>
	<?php require_once ('templates/sidebar.php'); ?>
	<div class="page-container">
		<?php require_once ('templates/header-desktop.php'); ?>
		<div class="main-content">
			<div class="section__content section__content--p30">
				<?php
				if($msg == '1'){
					?>
					<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
						<span class="badge badge-pill badge-success">Success</span>
						Saved Successfully.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<?php
				}
				if($msg == '0'){
					?>
					<div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
						<span class="badge badge-pill badge-warning">Fail</span>
						Fail to Save.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<?php
				}
				?>
				<div class="row">
					<div class="col-lg-6">
					<div class="card">
						<div class="card-header">Enquiry</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">Add Enquiry</h3>
							</div>
							<hr>
							<form action="" method="post" novalidate="novalidate">
								<div class="form-group">
									<label for="enquiry_date" class="control-label mb-1">Enquiry Date</label>
									<input id="cc-pament" name="enquiry_date" type="date" class="form-control" aria-required="true" aria-invalid="false">
								</div>
								<div class="form-group has-success">
									<label for="name" class="control-label mb-1">Name</label>
									<input id="cc-name" name="name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
									<span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
								</div>
								<div class="form-group">
									<label for="mobile_no" class="control-label mb-1">Mobile number</label>
									<input id="cc-number" name="mobile_no" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the mobile number" data-val-cc-number="Please enter a valid mobile number" autocomplete="cc-number">
									<span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
								</div>
								<div class="form-group">
									<div class="form-group">
											<label for="status" class="control-label mb-1">Status</label>
											<select name="status" id="cc-status" class="form-control-lg form-control">
												<option value="0">Please select</option>
												<option value="pending">Pending</option>
												<option value="completed">Completed</option>
											</select>
											<span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
									</div>
								</div>
								<div class="form-group">
									<label for="message" class="control-label mb-1">Message</label>
									<textarea name="message" id="textarea-input" rows="9" placeholder="Message..." class="form-control"></textarea>
									<span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
								</div>
								<div>
									<button id="btn btn-prin" type="submit" class="btn btn-lg btn-primary btn-block">
										<i class="fa fa-lock fa-lg"></i>&nbsp;
										<span id="">Save</span>
									</button>
								</div>
							</form>
						</div>
					</div>
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


