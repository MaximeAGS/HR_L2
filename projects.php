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
        <title>Projects - HRMS admin</title>
		
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
		
		<!-- Summernote CSS -->
		<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote-bs4.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
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
								<h3 class="page-title">Projets</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Tableau bord</a></li>
									<li class="breadcrumb-item active">Projets</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="add_projet.php" class="btn add-btn"><i class="fa fa-plus"></i> Créer Projet</a>
								<div class="view-icons">
									<a href="projects.php" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
									<!-- <a href="project-list.php" class="list-view btn btn-link"><i class="fa fa-bars"></i></a> -->
								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<form  method="post">
					 <div class="row filter-row">	
					 <div class="col-sm-6 col-md-3">  
							<div class="form-group form-focus">
								<input type="text" class="form-control floating" name="projet" required>
								<label class="focus-label">Tapez ici</label>
							</div>
						</div> 
						<div class="col-sm-6 col-md-3">  
							<input type="submit" name="search" class="btn btn-success btn-block" value="Rechercher">  
					</div>     
                    </div> 
					</form>
					<?php 
						if(isset($_POST['search']))
							{
								$projet=$_POST['projet'];
								$sql="SELECT * FROM projets WHERE id like '%$projet%' or nom like '%$projet%' or description like '%$projet%' or date like '%$projet%' ";
							}
							else
							{
								$sql="SELECT * FROM projets";
						}
					?>
					<div class="row staff-grid-row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped Custom-table mb-0">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nom</th>
										<th>Description</th>
										<th>Date</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<?php
										// $sql = "SELECT * FROM projets";
										$query = $dbh->prepare($sql);
										$query->execute();
										$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0)
										{
											foreach($results as $row)
										{
								?>
								<tbody>
									<tr>
									<td><?php echo htmlentities($row->id) ?></td>
									<td><?php echo htmlentities($row->nom) ?></td>
									<td><?php echo htmlentities($row->description) ?></td>
									<td><?php echo htmlentities($row->date) ?></td>
									<td class="text-right">
									<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
										<a class="dropdown-item" href="delete/delete_projet.php?id=<?php echo htmlentities($row->id); ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
									</div>
								</div>
									</td>
									</tr>
									
								</tbody>
								<?php $cnt+=1;
										}
													
										}
										else{
											echo "<div 
											style='background-color: #f08080;
											color: white;
											width: 250px;
											height: 40px;
											text-align: center;'>
											<p> Aucun résultat trouvé pour $projet.</p>
											</div></br>
											";
										} 
										?>
								</table>
							</div>	
						</div>				
					</div>					
				<!-- Create Project Modal -->
				<?php include_once("includes/modals/projects/add.php");?>
				<!-- /Create Project Modal -->
				
				<!-- Edit Project Modal -->
				<?php include_once("includes/modals/projects/edit.php"); ?>
				<!-- /Edit Project Modal -->
				
				<!-- Delete Project Modal -->
				<?php include_once("includes/modals/projects/delete.php"); ?>
				<!-- /Delete Project Modal -->
				
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
		
		<!-- Summernote JS -->
		<script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
    </body></html>;