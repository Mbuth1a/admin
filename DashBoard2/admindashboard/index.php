<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Kibunja Franziska">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<?php require_once('includes/links.php')?>
</head>
<body>
	<!-- All our code. write here   -->
	<!-- beginning of header-->
	<?php require_once('includes/header.php') ?>
	<!-- end of header -->
<br>
	<!-- sidebar starts -->
	<?php require_once('includes/sidebar.php') ?>
	<!-- sidebar ends -->
	
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Top Content</span>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>					
					</div>
					<div class="card-body">
						<span><i class="fa fa-group fa-2x"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">                      
						<span>Available Courses</span>					
					</div>
					<div class="card-body">
						<span><i class="fa fa-folder-open fa-2x"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>            
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
							<span>Campuses</span>						
						</div>
						<div class="card-body">
							<span><i class="fa fa-graduation-cap fa-2x"></i></span>
							<span class="float-right">00</span>
					</div> 
					<div class="card-footer"></div>
				</div>  
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
							<span>Users</span>												
					</div>
						<div class="card-body">
							<span><i class="fa fa-user fa-2x"></i></span>
							<span class="float-right">00</span>
						</div> 
						<div class="card-footer"></div>
				</div>
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Student Analysis</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-line-chart fa-2x"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>                 
			</div>            
		</div>         
	</div>

<script src="webStartingTemplate/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/webStartingTemplate/bootstrap/js/bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>