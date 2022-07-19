<?php 
$msg ="";
//database connection 
require_once('/xampp/htdocs/DashBoard2/admindashboard/logics/dbconnection.php');
$querystudents=mysqli_query($conn,"SELECT *FROM contactus WHERE no ='".$_GET['id']."' ");
while($fetchstudents =mysqli_fetch_array($querystudents))
{
    $firstname= $fetchstudents['firstname'];
    $lastname= $fetchstudents['lastname'];
    $phonenumber=$fetchstudents['phonenumber'];
    $email=$fetchstudents['email'];
    $message=$fetchstudents['message'];
    $id= $fetchstudents['no'];
}
require_once('/xampp/htdocs/DashBoard2/admindashboard/logics/processedit.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php require_once('/xampp/htdocs/DashBoard2/admindashboard/includes/links.php')?>

<body>
    <!-- header -->
        <?php require_once('/xampp/htdocs/DashBoard2/admindashboard/includes/header.php')?>
        <!-- header ends -->
        <!-- sidebar start  -->
        <?php require_once('/xampp/htdocs/DashBoard2/admindashboard/includes/sidebar.php')?>
        <!-- sidebar ends here -->
        <div class="main-content pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-dark text-white text-center">
                                <a class=""></a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
</body>
</html>