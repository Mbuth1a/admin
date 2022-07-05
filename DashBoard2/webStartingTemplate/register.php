<?php
$msg='';
require_once('processRegister.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
</head>
<body>
    <!-- As a heading -->
    <div class="header" style="text-align:center;">
        <h3>Zalego|Admin Register</h3>
    </div>
    <br>
    <br>
    <br>
    <div class="sub-header"style="text-align:center">
        <img src="images/zalegologo.jpg" alt="zalego" height="100" width="100" class="mx-auto d-block rounded-circle">
        <span><?php  echo $msg ?></span>
    </div>
    <div class="container">          
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <form action="register.php" method="POST" autocomplete="off">
                <div class="row">
                    <div class="col-lg-12">
                        <label for="exampleFormControlInput1" class="form-label">Username:</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="col-lg-12">
                        <label for="exampleFormControlInput1" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="inputEmail" name="email">
                    </div>
                    <div class="col-lg-12">
                        <label for="inputpassword" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="inputpassword" name="password">
                    </div>
                    <div class="col-lg-12">
                        <label for="inputpassword" class="form-label">Confirm Password:</label>
                        <input type="password" class="form-control" id="inputpassword" name="cpassword">
                    </div>
                    <br>
                </div>
                <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm" name="signup">submit</button>
                    </div> 
                    <div class="col-lg-12">
                        <span>Have account? in</span> <a href="#"> Here</a>
                    </div>
            </form>                                           
        </div>
    </div>
    

    <script src="webStartingTemplate/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/webStartingTemplate/bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>