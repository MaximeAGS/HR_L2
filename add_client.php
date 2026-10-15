<?php 
	session_start();
	error_reporting(0);
	include('includes/config.php');
	if(strlen($_SESSION['userlogin'])==0){
		header('location:login.php');
	}
 ?>
<!DOCTYPE html>
<html lang="en">
	    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Add Client - HRMS admin </title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo_mini.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <?php include_once("includes/header.php"); ?>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <?php include_once("includes/sidebar.php"); ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Add  Client</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Add Client</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<form  action="insert_client.php" method="POST">
								<div class="row">
								<div class="row filter-row">
                                <div class="col-sm-6 col-md-3">
										<div class="form-group form-focus">
                                        <input class="form-control floating" name="id" type="text" required>
											<label class="focus-label">id_client</label>	
										</div>
									</div>
                                <div class="col-sm-6 col-md-3">
										<div class="form-group form-focus">
                                        <input class="form-control floating" name="prenom" type="text" required>
											<label class="focus-label">FirstName</label>	
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group form-focus">
                                        <input class="form-control floating" name="nom" type="text" required>
											<label class="focus-label">LastName</label>	
										</div>
									</div>
                                    <div class="col-sm-6 col-md-3">
                                    <div class="form-group form-focus">
                                        <input class="form-control floating" name="user" type="text" required>
											<label class="focus-label">UserName</label>
										</div>
									</div>
                                    <div class="col-sm-6 col-md-3">
                                    <div class="form-group form-focus">
                                        <input class="form-control floating" name="email" type="mail" required>
											<label class="focus-label">Email</label>
										</div>
									</div>
                                    <div class="col-sm-6 col-md-3">
                                    <div class="form-group form-focus">
                                        <input class="form-control floating" name="passwd" type="password" required>
											<label class="focus-label">Password</label>
										</div>
									</div>
                                    <div class="col-sm-6 col-md-3">
                                    <div class="form-group form-focus">
                                        <input class="form-control floating" name="num" type="const" required>
											<label class="focus-label">Phone</label>
										</div>
									</div>
                                    <div class="col-sm-6 col-md-3">
                                    <div class="form-group form-focus">
                                        <input class="form-control floating" name="Departement" type="text" required>
											<label class="focus-label">Company</label>
										</div>
									</div>
                                    <div class="col-sm-6 col-md-3">
                                    <div class="form-group form-focus">
                                        <input class="form-control floating" name="Designations" type="text" required>
											<label class="focus-label">Adress</label>
										</div>
									</div>
                                    <div class="col-sm-6 col-md-3">
                                    <div class="form-group form-focus">
                                        <input class="form-control floating " name="status" type="text" required>
											<label class="focus-label">Status</label>
										</div>
									</div>
                                    <div class="col-sm-6 col-md-3">
                                    <div class="form-group form-focus">
                                        <input class="form-control floating" name="photo" type="file" required>
											<label class="focus-label">Picture</label>
										</div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                    <div class="form-group form-focus">
                                        <input class="form-control floating" name="date" type="date" required>
											<label class="focus-label">Date</label>
										</div>
                                        </div>
								<div class="col-sm-6 col-md-3">
									<!-- <button class="btn btn-primary submit-btn m-r-10">Save & Send</button> -->
									<button class="btn btn-success btn-block">Save</button>
								</div>
							</form>

						</div>
					</div>

				</div>
				<!-- /Page Content -->
				
			</div>
			<!-- /Page Wrapper -->
			
        </div>

								
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>