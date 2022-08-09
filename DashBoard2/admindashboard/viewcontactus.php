<?php 
require_once('logics/connection.php');
$sqlFetchContact = mysqli_query($conn, "SELECT *FROM contactus WHERE no='".$_GET['id']."'");
while($fetchcontact = mysqli_fetch_array($sqlFetchContact))
{
    $firstname= $fetchcontact['firstname'];
    $lastname= $fetchcontact['lastname'];
    $email = $fetchcontact['email'];
    $phone= $fetchcontact['phone'];
    $message= $fetchcontact['message'];
    $sentOn= $fetchcontact['created_at'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>
    <?php require_once('includes/header.php')?>
</h1>
<body>
    <?php require_once('includes/navbar.php')?>
    <?php require_once('includes/sidebar.php')?>
    <div class= "main-content"> 
        <div class="container-fluid">
            <div class ="row">
                <div class= "col-lg-6">
                    <div class=" card rounded-3 shadow">
                        <div class= "card-header text-centre bg-dark text-light">
                            <a href="contactus.php"><button class="btn btn-secondary float-start"><i class="fa fa-arrow-left float-start"></i></button></a>
                            <h3 class="card-title"> <?php echo $firstname ?> Personal info</h3>

                        </div>
                        <div class="card-body">
                            <ul class="list-group">

                            <li class="list-group-item">First name: <span class= "float-end badge bg-primary"> <?php echo $firstname?> </span></li>
                            <li class="list-group-item">Last name: <span class= "float-end badge bg-primary"> <?php echo $lastname?> </span></li>
                            <li class="list-group-item">Email: <span class= "float-end badge bg-primary"> <?php echo $email?> </span></li>
                            <li class="list-group-item">Phone number: <span class= "float-end badge bg-primary"> <?php echo $phone?> </span></li>

                            </ul>

                        </div>

                    </div>

                </div>
                <div class= "col-lg-6">
                    <div class ="card-rounded-3 shadow">
                        <div class="card-header text-centre bg-dark text-light">
                            <h3 class="card-title">Message</h3>

                        </div>
                        <div class="card-body">
                            <?php echo $message?>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
    <?php require_once('includes/scripts.php')
    ?>
</body>
</html>