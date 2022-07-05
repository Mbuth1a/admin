<?php
require_once('connection.php');
if(isset($_POST['signup']))
{
    //fetch form-data
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpass=$_POST['cpassword'];
    $passHash=md5($password);
    

    $sqlusername=mysqli_query($conn, "SELECT * FROM account  WHERE username = '$username' ");
    $checkusername=mysqli_num_rows($sqlusername);

    $sqlEmail = mysqli_query($conn, "SELECT * FROM account WHERE email = '$email' ");
    $checkEmail = mysqli_num_rows($sqlEmail);
    if($checkEmail !=0){
        $msg = "username already exist";
    }
    elseif($checkEmail !=0){
        $msg= "Email already in use. please try a different email address";
    }
    
    //password match
    elseif($password !=$cpass)
    {
        $msg = "passwords doesn't match";
    }

    //submit data to database table
    else{
        //create insert query
        $sql= mysqli_query($conn, "INSERT INTO account(username,email,password)VALUES('$username','$email','$passHash') ");

        if($sql)
        {
            $msg = "data submitted was succesfull";
        }
        else{
            $msg= "error occured";
        }
    }
    



}
    
?>