<?php
require_once('dbconnection.php');
if(isset($_POST['signin']))
{
    //fetch form-data
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpass=$_POST['cpassword'];
    $passHash=md5($password);
    

    $sqlusername=mysqli_query($conn, "SELECT * FROM signin  WHERE username = '$username' ");
    $checkusername=mysqli_num_rows($sqlusername);

    $sqlEmail = mysqli_query($conn, "SELECT * FROM signin WHERE email = '$email' ");
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
        $sql= mysqli_query($conn, "INSERT INTO logini (username,email,password)VALUES('$username','$email','$passHash') ");

        if($sql)
        {
            $msg = "data submitted was successful";
        }
        else{
            $msg= "error occurred";
        }
    }
    



}
    
?>