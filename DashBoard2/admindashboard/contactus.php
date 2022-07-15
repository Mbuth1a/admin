<?php
require_once('logics/dbconnection.php');
$sql= mysqli_query($conn, "SELECT *FROM contactus")
?>


<!DOCTYPE html>
<html>
    
<body>
	<!-- All our code. write here   -->
    <?php require_once('includes/header.php')?>
       <br>
	<!-- sidebar starts -->
	<?php require_once ('includes/sidebar.php') ?>
	<!-- sidebar ends -->
    <?php require_once ('includes/links.php')?>
    
    <br>
    <?php require_once('includes/scripts.php')?>


	<div class="main-content">
		<div class="container-fluid">
			<div class="row">				
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
            <a class ="float-left text-white" href="index.php">
            <span><i class= "fa fa-arrow-circle-left"></i></span>
            
						<span>Back</span></a>
            <span>
              Contactus
            </span>
					</div>										
				</div>                 
			</div>  
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-hover table-responsive{-sm|-md|-lg|-xl" style="font-size:12px">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th >First name</th>
                                <th >Last name</th>
                                <th >Phone</th>
                                <th >Email</th>
                                <th >Message</th>                
                      
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($fetchEnrollmentRecord= mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td> <?php echo $fetchEnrollmentRecord['no']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['firstname']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['lastname']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['phonenumber']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['email']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['message']  ?></td>
                                    <td>
                                        
                                </tr>                                              
                            
                            <?php } ?>                        
                        </tbody>
                    </table>
                </div>
            </div>
		</div>         
	</div>
</body>
</html>