<?php
//initialize the session
session_start();

//check whether the session is variable is present or not
if(!isset($_SESSION['login']) || (trim($_SESSION['login']) == '') ){
    header("location:login.php");
    exit();
} 



?>