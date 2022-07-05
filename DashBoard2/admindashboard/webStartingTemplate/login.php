<?php
session_start();

//database connection
require_once('connection.php');

if(isset($_POST['login']))
{
    //fetch form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $newPass =md5($password);

    //perform the sql query
    $sql = mysqli_query($conn, "SELECT *FROM account WHERE username= '$username' and password='$newPass'");
    $fetch = mysqli_fetch_array($sql);

    if($fetch > 0)
    {
        header('location: index.php');     
    }
    else{
        echo "error";
    }
    if($fetch > 0)
    {
        $_SESSION['login'] = $username;
        header('location: index.php');
    }
    else{

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="header" style="text-align:center;">
        <span> Zalego Training|Admin Login </span>
    </div>
    <br>
    <br>
    <br>
    <div class="sub-header" style="text-align:center">
        <img src="images/zalegologo.jpg" alt="Zalego" height="100" width="100" class="rounded-circle">
    </div>
    <div class="container">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <form>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="exampleFormControlInput1" class="form-label">Username:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-lg-12">
                        <label for="inputpassword" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="inputpassword">
                    </div>                  
                </div>
                <button type="submit" class="btn btn-primary">submit</button>
                <div class="col-lg-12">
                    <span>Have no account?Sign up </span> <a href="#"> Here</a>
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