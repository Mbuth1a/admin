<?php
require_once('logics/connection.php');

require_once('logics/processRegister.php');


?>

<!DOCTYPE html>
<html>

<?php require_once('includes/head.php') ?>

<body>
	<?php require_once('includes/navbar.php') ?>

	<?php require_once('includes/sidebar.php') ?>
	<div class="main-content">
		<div class="container">
            <div class="card">
                <div class="card-header text-capitalize bg-dark text-white text-center"><h4>Add student</h4></div>
                <div class="card-body">
                    <form action="add-student.php" method="POST">
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="fullname" class="form-label" na><b>Full Name</b></label>
                                <input type="text" name="fullname" class="form-control" placeholder="Enter Full Name" required>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="phonenumber" class="form-label"><b>Phone Number</b></label>
                                <input type="tel" name="phonenumber" class="form-control" placeholder="+2547..." required>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="email" class="form-label"><b>E-mail Address</b></label>
                                <input type="email" name="email" class="form-control" placeholder="Enter E-mail" required>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="gender" class="form-label"><b>Gender</b></label>
                                <select class="form-select mb-3" aria-label="" name="gender">
                                    <option selected>--Select gender--</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                    <option value="Rather not say">Rather not say</option>
                                </select>
                            </div>
                        </div> 
                        <div class="row">
                            <label for="course" class="form-label"><b>Course</b></label>
                            <select class="form-select mb-3" name="course">
                                <option selected>--Select course--</option>
                                <option value="Web Design">Web Design</option>
                                <option value="Data Science">Data Science</option>
                                <option value="Android Development">Android Development</option>
                                <option value="Cyber Security">Cyber Security</option>
                                <option value="AWS Certification">AWS Certification</option>
                            </select>
                        </div>
                        
                        <br>
                        <button type="submit" class="btn btn-primary" name="submitApplication">Add Student</button>
                    </form>
                </div>
            </div>
        </div>
	</div>
	
	<?php require_once('includes/scripts.php') ?>
</body>
</html>