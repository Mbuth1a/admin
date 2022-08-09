<?php
	$server="localhost";
	$username="root";
	$password="";
	$database="zalego";
	
	$conn=mysqli_connect($server,$username,$password,$database);

	$queryEnrollstudents= mysqli_query($conn, "SELECT * FROM signin ");
	$countAllstudents= mysqli_num_rows($queryEnrollstudents);

	$queryEnrolledfemale= mysqli_query($conn, "SELECT * FROM signin WHERE gender= 'Female'");
	$countAllFemale= mysqli_num_rows($queryEnrolledfemale);
?>
<!DOCTYPE html>
<html>
<?php require_once('includes/links.php')
?>
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
						<span class="align-middle">Students</span>					
					</div>
					<div class="card-body">
						<span><i class="fa fa-group fa-3x"></i></span>
						<span class="float-right"> <span class="badge badge-dark rounded-pill"><?php echo$countAllStudents?></span></span>
                    </div>
					<div class="card-body">
						<span><i class="fa fa-group fa-2x"></i></span>
						<span class="float-end badge bg-dark rounded-pill"><?php echo $countAllFemale?></span>
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


<?php require_once('includes/scripts.php')?>
</body>
</html>