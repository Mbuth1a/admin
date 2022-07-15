<?php
    // database connection
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database);
    $sqlfetchenrolledstudent = mysqli_query($conn,
    "SELECT * FROM signin WHERE no ='".$_GET['id']."' ");
    while ($fetchstudent= mysqli_fetch_array($sqlfetchenrolledstudent)){
        $fullname =$fetchstudent['fullname'];
        $phone =$fetchstudent['phone'];
        $email =$fetchstudent['email'];
        $gender =$fetchstudent['gender'];
        $course =$fetchstudent['course'];
    }
?>



<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Peter Mbuthia">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
    
</head>
<body>
	<!-- All our code. write here   -->
	 <div class="header">
        <a href="index.php">
		<img src="images/zalegologo.jpg" alt="Zalego" height="50" width="50" class=" mx-auto rounded-circle"> 
		</a>
	</div> 
    <br>
	<!-- sidebar starts -->
	<?php require_once('includes/sidebar.php') ?>
	<!-- sidebar ends -->

	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="header bg-dark text-white">
                            <h4 class="card-title">Personal Information</h4>
                            

                        </div>
                        <div class="card-body p-5">
                            <ul class="list-group">
                                <li class="list-group-item">Full Name: <span <?php echo $f 
                <div class="col-lg-6">
                    <div class "card">
                        <div class "header bg-dark text-white">
                            <h4 class="card-title">Personal Information</h4>
                            

                        </div>
                        <div class "card-body p-5" >
                            <ul class="list-group">
                                <li class="list-group-item">Gender: <span <?php echo $gender?>></span></li>
                                <li class="list-group-item">Course: <span <?php echo $course?>></span></li>
                            </ul>

                            
                        </div>
                            
                    </div>
                    
                </div>

            </div>

         </div>
	</div>         
	

<?php require_once('includes/scripts.php')?>
</body>
</html>