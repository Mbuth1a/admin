<?php
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
    echo 'unsuccessful' ;
}

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


?>