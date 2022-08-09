<?php 
require_once('logics/connections.php');
$sqlDelete= mysqli_query($conn, "DELETE *FROM contactus WHERE no ='".$_GET['id']."'");
if($sqlDelete)
{
    echo "User Deleted Successfully!";
    header('location:contactus.php');
}
else

{
    echo "Error occurred";

}
?>
