<?php
$server="localhost";
$username='root';
$password="";
$database="zalego";  

$conn=mysqli_connect($server,$username,$password,$database);
if(isset ($_POST["subscribe"] ) ){
  //1.Fetch form data
  $email=$_POST["email"];
  //Submit form data
  $insert_data= mysqli_query($conn,"INSERT INTO 
  subscribers(email)
  VALUES('$email')
  ");  
  if($insert_data){
    echo "Data submitted successfully";
  }
  else{
   echo"Error occurred";
  }                
}

$sql=mysqli_query($conn, "SELECT * FROM subscribers");
  
require_once('logics/subscriber.php');



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
		  <div class="card">
            <div class="card-body">
               <table class="table table-hover table-striped table-responsive" style="font-size:12px">
                  <thead>
					
					<div class="card-header bg-dark text-white ">
						
					<div class="row ">
                                <a href="index.php">
                                    <button type="button" class="btn btn-dark ">
                                       <span> <i class="fa fa-arrow-left" > <span>Go back</span> </i> </span>
                                      
                                    </button>
                                </a>
                                <h4 class="text-center col-9 ">Students</h4>
								<a href="#" class="btn btn-danger btn-lg pull-right  " data-toggle="modal" data-target="#addUserForm">
									<i class="fa fa-plus-circle"></i>
                                </a> 
                                
                            </div>
					</div>
				
                    <tr>
                      <th scope="col">id</th>

                      <th scope="col">Email </th>
					  <th scope="col">enrolled on</th>
					  <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($fetch=mysqli_fetch_array($sql)) { ?>
						<tr>
                      <th scope="row"><?php  echo $fetch['no'] ?></th>
					  <td><?php  echo $fetch['email'] ?></td>
					  <td><?php  echo $fetch['created_at'] ?> </td>
					  <td>
						<a href="edit-subscribers.php?id=<?php  echo $fetch['no'] ?> " class="btn btn-primary btn-sm">
						   <i class="fa fa-edit"></i>
						</a>
						
						<a href="view-subscribers.php?id=<?php  echo $fetch['no'] ?> " class="btn btn-info btn-sm">
                            <i class="fa fa-eye"></i>
						</a>
						
						<a href="delete-subscribers.php?id=<?php  echo $fetch['no'] ?> " class="btn btn-danger btn-sm">
					        <i class="fa fa-trash"></i>    
						</a>
					</td>
                    </tr>
					<?php   }     ?>
                  </tbody>
               </table> 






            </div>
          </div>
			
		</div>
	</div>

	<div class="modal fade"id="addUserForm" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" >
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="ModalLabel">Register now</h4>
					<button type="button" class="close" data-dismiss="modal" aria-Label="close">
						<span aria-hidden="true">x</span>
					</button>
				</div>
				<div class="modal-body">
                   <h3>Modal body</h3>     
                
                   <form action="add-subscribers.php" method="POST" class="pt-3" > 
                        <div class="row d-flex justify-content-center pb-3 mx-auto">
                          <p class="fw-lighter fs-4 text-center">Subscribe to get information, latest news about <br>Zalego Academy</p>
                               <div class=" col-lg-12 justify-content-center pl-5 ml-5 align-items-center ">
                                  <label for="email" class="form-label fw-semibold ">Email</label>
                                  <input type="email" class="form-control " name="email" placeholder="Enter your e-mail address please">     
                                </div>
                           <div class=" mt-4 p-2 col-lg-3 pb-5">
                <button class="btn btn-primary" name="subscribe">Subscribe</button>  
            </div>   
           </form>    
              
       	
				</div>
				<div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-dark btn-sm" >Save changes</button>
				</div>
			</div>
		</div>
	</div>
<?php include('includes/scripts.php') ?>
</body>
</html>