<?php
require_once('logics/dbconnection.php');
$sql= mysqli_query($conn, "SELECT *FROM signin")
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
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>										
				</div>                 
			</div>  
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-hover table-responsive{-sm|-md|-lg|-xl">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th >FullName</th>
                                <th >Phone</th>
                                <th >Email</th>
                                <th >Gender</th>
                                <th >Course</th>                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($fetchEnrollmentRecord= mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td> <?php echo $fetchEnrollmentRecord['no']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['fullname']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['phone']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['email']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['gender']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['course']  ?></td>
                                    <td>
                                        <a href="edit-enrollment.php?id=<?php echo $fetchEnrollmentRecord["no"]?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="view-enrollment.php" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>                            
                            </tr>                           
                                </tr>                            
                            
                            <?php } ?>                        
                        </tbody>
                    </table>
                </div>
            </div>
		</div>         
	</div>

<?php require_once('includes/scripts.php')?>
</body>
</html>