<?php
$server="localhost";
$username='root';
$password="";
$database="zalego";  

$conn=mysqli_connect($server,$username,$password,$database);
if(isset ($_POST["signin"] ) ){
  //1.Fetch form data
  $email=$_POST["email"];
  //Submit form data
  $insert_data= mysqli_query($conn,"INSERT INTO 
  signin(email)
  VALUES('$email')
  ");  
  if($insert_data){
    echo "Data submitted successfully";
  }
  else{
   echo"Error occurred";
  }                
}
?>