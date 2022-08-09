<?php require_once('auth.php') ?>

 <div class="header text-white">
      <img src="zalda.jpg" alt="Zalego" height="50" width="50" class="rounded-circle">
         <span><?php echo $_SESSION['login']?></span>
  
       <span class="pull-right" style="padding:10px 30px;text-decoration:none">
       <a href="logout.php"><i class="fa fa-sign-out fa-2x"></i></a>
      </span>
  </div> 

