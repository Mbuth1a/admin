<?php
    require_once('logics/connection.php');

    $sqlDelete = mysqli_query($conn, "DELETE FROM enrollment WHERE no='".$_GET['id']."' ");
    if($sqlDelete)
    {
        echo "User deleted successfully!";
        header('location:students.php');
    }
    else 
    {
        echo "Error occurred";
    }
?>
