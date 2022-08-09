<?php
session_start();

// //database connection
// require_once('connection.php');
    
if(isset($_POST['login']))
{
    //fetch form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $newPass =md5($password);

    //perform the sql query
    $sql = mysqli_query($conn, "SELECT *FROM subscribers WHERE username= '$username' and password='$newPass'");
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
{
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database);
if($conn)
{
    echo 'success';
}
else
{
    echo 'unsuccessful';
;}

$sql= mysqli_query($conn, "SELECT *FROM signin");
    while ($fetchRecord=mysqli_fetch_array($sql))
    {
        echo
        $fetchRecord['fullname'].
        $fetchRecord['phone'].
        $fetchRecord['email'].
        $fetchRecord['gender'].
        $fetchRecord['course'];
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
    <div class="container p-5">
        <div class="row ">
            <img src="zalda.jpg" alt="zalego training-Admin log in" class="mx-auto rounded-circle p-3">
        </div>

      <form action="login.php" method="POST"> 
        <div class="card mx-auto col-md-7">
            <div class="card-body">
                <div class="form-floating pt-3">
                    <label for="floatingInput">username</label>
                    <input type="text" class="form-control" id="floatingInput" name="username" placeholder="">
                  </div>
                  <div class="form-floating pt-3">
                    <label for="floatingPassword">Password</label>
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="">
                  </div>
                  <div class="pt-3">
                    <input class="btn btn-primary" type="submit" name="login" value="login">
                  </div>
                  <div>
                <button type="submit" class="btn btn-primary">submit</button>
                <div class="col-lg-12">
                    <span>Have no account?Sign up </span> <a href="register.php" class="linknav active"> Here</a>
                </div>   
            </form>

        </div>

    

    <script src="webStartingTemplate/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/webStartingTemplate/bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>