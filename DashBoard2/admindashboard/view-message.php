<?php

//database connection
require_once('logics/dbconnection.php');
$sqlFetch= mysqli_query($conn,"SELECT * FROM contact_us WHERE id='".$_GET['id']."'");
while($fetchstudent = mysqli_fetch_array($sqlFetch))
{
    $firstname=$fetchstudent['firstname'];
    $lastname=$fetchstudent['lastname'];
    $email=$fetchstudent['email'];
    $phone=$fetchstudent['phonenumber'];
    $message=$fetchstudent['message'];
    $createdat=$fetchstudent['created_at'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
	<?php  include('includes/header.php') ?>
	
</head>
<body>
	 <!-- All our code. write here   -->
	 <?php include('includes/navbar.php');?>
	 
	 <?php include('includes/sidebar.php'); ?>
  <div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center" >
                        <h4 class="card-title" >Personal Information</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Firstname : <span class ="float-right badge-danger"><?php echo $firstname ?></span></li>
                            <li class="list-group-item">Lastname : <span class ="float-right badge-warning"><?php echo $lastname ?></span></li>
                            <li class="list-group-item">Phonenumber : <span class ="float-right badge-dark"><?php echo $phone ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center" >
                        <h4 class="card-title" >Other information</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Email : <span class ="float-right badge-danger"><?php echo $email ?></span></li>
                            <li class="list-group-item">Message : <span class ="float-right badge-warning"><?php echo $message?></span></li>
                            <li class="list-group-item">Enrolled on : <span class ="float-right badge-dark"><?php echo $createdat ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </div>

	<?php include('includes/scripts.php') ?>
</body>
</html>
