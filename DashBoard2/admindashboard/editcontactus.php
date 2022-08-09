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
require_once('/xampp/htdocs/DashBoard2/admindashboard/logics/subscriber.php');
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
            <div class="container">
                <div class="card-shadow">
                    <div class="card-header bg-dark text-white text-center">
                        <div class="card-body">
                            <form action="edit-contact.php?id=<?php echo $id ?>" method="POST">
                               <div class="row">
                                <div class="mb-3 col-lg-6">
                                    <label for="firstname" class="form-label"><b>First Name</b></label>
                                    <input type="text" name="firstname" class="form-control shadow" placeholder="First Name" class="form-control shadow" placeholder="First Name..." value="<?php echo $firstname ?>">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="lastname" class="form-label"><b>Last Name</b></label>
                                <input type="text" name="lastname" class="form-control shadow" placeholder="Last Name..." value="<?php echo $lastname ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="phone" class="form-label"><b>Phone-Number</b></label>
                                <input type="tel" name="phonenumber" class="form-control shadow" placeholder="Phonenumber..." value="<?php echo $phonenumber ?>">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="phone" class="form-label"><b>Phone Number</b></label>
                                <input type="email" name="email" class="form-control shadow" placeholder="Email..." value="<?php echo $email  ?>">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-12">
                                <label for="message" class="form-label"><b>Message</label>
                                <textarea name="message" cols="30" rows="10" class="form-control shadow text-break"><?php echo $message ?></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary shadow mb-3" name="editContact">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 

    <?php require_once('includes/scripts.php') ?>
</body>
</html>