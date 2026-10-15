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
        <title>Formation - HRMS admin</title>
		
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
		
		<!-- Datatable CSS -->
		<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
		
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
            <?php include_once("includes/header.php");?>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <?php include_once("includes/sidebar.php");?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Formation</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Tableau de bord</a></li>
									<li class="breadcrumb-item active">Formation</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="ad_formation.php" class="btn add-btn" ><i class="fa fa-plus"></i> Ajouter nouveau</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th style="width: 30px;">#</th>
											<th>Formation</th>
											<th>Formateur</th>
											<th>Employé</th>
											<th>Description </th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
									<?php
														$sql = "SELECT * FROM typetrainer";
														$query = $dbh->prepare($sql);
														$query->execute();
														$results=$query->fetchAll(PDO::FETCH_OBJ);
														$cnt=1;
														if($query->rowCount() > 0)
														{
														foreach($results as $row)
														{
															$Formationid=htmlentities($row->id);
													?>
										<tr>
											<td><?php echo $Formationid?></td>
											<td><?php echo  htmlentities($row->type);?></td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o "></i> Voir
													</a>
													<div class="dropdown-menu">
													<?php
														$sql = "SELECT * FROM trainer where id IN( select id from suivre where id=$Formationid)";
														$query = $dbh->prepare($sql);
														$query->execute();
														$resultss=$query->fetchAll(PDO::FETCH_OBJ);
														$cnt=1;
														if($query->rowCount() > 0)
														{
														foreach($resultss as $rows)
														{	
													?>
													<h9 class="dropdown-item"><?php echo htmlentities($rows->prenom)." ".htmlentities($rows->nom); ?></h9>
													<?php  }}?>	
													</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o "></i> Voir
													</a>
													<div class="dropdown-menu">
											<?php
														$sql = "SELECT * FROM employees where Employee_id IN( select Employee_id from suivre where id=$Formationid)";
														$query = $dbh->prepare($sql);
														$query->execute();
														$results=$query->fetchAll(PDO::FETCH_OBJ);
														$cnt=1;
														if($query->rowCount() > 0)
														{
														foreach($results as $rows)
														{	
													?>
													<h9 class="dropdown-item"><?php echo htmlentities($rows->FirstName)." ".htmlentities($rows->LastName); ?></h9>
													<?php  }}?>	
													</div>
													</td>
													<td><?php echo htmlentities($row->description); ?></td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_training"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_training"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<?php }}?>
									</tbody>
								</table>
							</div>
				
                </div>
				<!-- /Page Content -->

				<!-- Add Training List Modal -->
				<?php include_once("includes/modals/training/add.php"); ?>
				<!-- /Add Training List Modal -->
				
				<!-- Edit Training List Modal -->
				<?php include_once("includes/modals/training/edit.php"); ?>
				<!-- /Edit Training List Modal -->
				
				<!-- Delete Training List Modal -->
				<?php include_once("includes/modals/training/delete.php"); ?>
				<!-- /Delete Training List Modal -->
			
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
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

    </body>
</html>