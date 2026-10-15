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
        <title>Add formation - HRMS admin </title>
		
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
								<h3 class="page-title">Ajouter nouveau</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Tableau de bord</a></li>
									<li class="breadcrumb-item active">ajouter nouveau</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<form  action="insert_formation.php" method="POST">
								<div class="row">
								<div class="col-sm-6 col-md-3">
                                          <div class="form-group form-focus select-focus">
                                                <select class="select floating" name="formation" >
                                                            		<?php
                                                                $sql = "SELECT * FROM  typetrainer";
                                                                $query = $dbh->prepare($sql);
                                                                $query->execute();
                                                                $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                                $cnt=1;
                                                                if($query->rowCount() > 0)
                                                                    {
                                                                    foreach($results as $row)
                                                                    {	
                                                            ?>
                                                         <option value="<?php echo htmlentities($row->id);?>"><?php echo htmlentities($row->type)?></option>    
                                                            <?php }} ?>
                                                </select>
                                                    <label class="focus-label"> Type de Formation</label>	
                                            </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                          <div class="form-group form-focus select-focus">
                                                <select class="select floating" name="formateur" >
                                                            		<?php
                                                                $sql = "SELECT * FROM  trainer";
                                                                $query = $dbh->prepare($sql);
                                                                $query->execute();
                                                                $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                                $cnt=1;
                                                                if($query->rowCount() > 0)
                                                                    {
                                                                    foreach($results as $row)
                                                                    {	
                                                            ?>
                                                         <option value="<?php echo htmlentities($row->id);?>"><?php echo htmlentities($row->nom)," " .htmlentities($row->prenom);?></option>    
                                                            <?php }} ?>
                                                </select>
                                                    <label class="focus-label"> Formateur</label>	
                                            </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                          <div class="form-group form-focus select-focus">
                                                <select class="select floating" name="employé" >
                                                            		<?php
                                                                $sql = "SELECT * FROM  employees";
                                                                $query = $dbh->prepare($sql);
                                                                $query->execute();
                                                                $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                                $cnt=1;
                                                                if($query->rowCount() > 0)
                                                                    {
                                                                    foreach($results as $row)
                                                                    {	
                                                            ?>
                                                          <option value="<?php echo htmlentities($row->Employee_id);?>"><?php echo htmlentities($row->LastName)," " .htmlentities($row->FirstName);?></option>  
                                                            <?php }} ?>
                                                </select>
                                                    <label class="focus-label"> Employé</label>	
                                            </div>
                                    </div>	
                                   
								    <div class="submit-section">
	                                <button class="btn btn-success  submit-btn">Save</button>
								</div>
							</form>

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