<?php 
  $server="localhost";
  $username="root";
  $password="";
  $database="zalego";
  
  $conn=mysqli_connect($server,$username,$password,$database);

  $queryStudents=mysqli_query($conn, "SELECT *FROM signin WHERE no ='".$_GET['id']."'");
  while($fetchStudents = mysqli_fetch_array($queryStudents))
   {
     $id=$fetchStudents['no']; 
    $fullname = $fetchStudents['fullname'];
   $phone = $fetchStudents['phone'];
   $email= $fetchStudents['email'];
   $gender=$fetchStudents['gender'];
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
   <form action="index.php" method="POST">
      <div class="card-body  bg-light">
        <div class="main-content">
		  <div class="container-fluid">
			  <div class="row">
               
                 
            <div class="mb-3 col-lg-12">
               <label for="last-name" class="form-label">Fullname</label>
               <input type="text" name="Fullname" value="<?php echo $fullname?>" class="form-control" placeholder="Enter Your Full Name">
            </div>
         </div>
              

         <div class="row">
            <div class="mb-3 col-lg-12">
               <label for="phone" class="form-label">Phone Number</label>
               <input type="text" name="phone" value="<?php echo $phone?>" class="form-control" placeholder="Enter Your Phone Number">
            </div>
         </div>
         <div class="row">
         <div class="mb-3 col-lg-12">
          <label for="email" class="form-label">Enter Your Email</label>
          <input type="text" name="email" value="<?php echo $email?>" class="form-control" placeholder="Enter Your Email">
         </div>
         </div>
        
          
        <div class="row">
        <div class="mb-3 col-lg-12">
         <label for="Gender" class="form-label">Choose your Gender</label>
         <input type="text"  name="gender"  value="<?php echo $gender?>"class="form-control" placeholder="Enter Your Email Address">
        </div>
        </div>
        <!-- <div class="row">
          <div class="col-lg-9">
            <label for="message" class="form-label">Your message</label>
            <textarea cols="10"  name= "message" rows="10" class="form-control"></textarea>
          </div>
        </div> -->
        <br>
        <br>
        <br>
        <br>
        
        <button type= "submit" name= "submitButton" class="btn btn-primary">Update</button>
   </div>
</div>
</div>


       </form> 
       


<?php require_once('includes/scripts.php')?>
</body>
</html>