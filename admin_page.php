<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">

   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin.css">

</head>
<body class="bk">
   
<div class="container">

   <div class="content">
      <div class="bak1">
      <h1><center>CONTROL PANEL (v 1.1)</center></h1>
      
      </div>
      
<div >
      <div class="back2">
      
      <span class="admin-name">ADMIN : <?php echo $_SESSION['admin_name'] ?></span><a href="admin_logout.php"><button class="btn">Logout</button></a>
      </div>
      
      <br><br>
      
       <h1 class="control-heading">ADMIN PANEL</h1><br><br>

       
       <div class="admin-cont">
       <a href="404.html"><button class="pad">Galary Data</button></a>
       <a href="admin/admindt/admin_index.php"><button class="pad">Admin Logins</button></a>
       <a href="admin/user_registration/user_registration_index.php"><button class="pad">Registrations Data</button></a>
       <a href="admin/mail/mail_index.php"><button class="pad">Mails</button></a>

       </div>
      
      
      
      
</div>
</body>
</html>