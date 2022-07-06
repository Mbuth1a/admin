<?php 
   require_once('logics/dbconnection.php');
   $fetchEnrollmentRecord= mysqli_query($conn, "SELECT signin WHERE no='".$_GET.['id']."'");
   while($fetchEnrollmentRecord = mysqli_fetch_array($querystudent))
   {
    $firstname = $fetchEnrollmentRecord['firstname'];
    $lastname = $fetchEnrollmentRecord['lastname'];
   }
   if ($conn)
   {
    echo "success";

   }
   else{
    echo "unsuccessful";
   }


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
	
	<div class="main-content pt-5">
		<div class="container-fluid">
			<div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header text-center bg-dark">
                            <h2>Edit Students<?php echo 'fullname' ?></h2>
                        </div>
                    </div>
                </div>
            </div>
			                
		</div>            
   </div>       


<?php require_once('includes/scripts.php')?>
</body>
</html>