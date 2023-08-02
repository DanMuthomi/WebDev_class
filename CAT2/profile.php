<?php
  session_start();
  if(!isset($_SESSION['id'],$_SESSION['name'],$_SESSION['email'])){
    header('location:login.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>
  <link rel="stylesheet" type="text/css" href="navBar.css">
  <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
  <br>
  <ul class="navBar">
    <li><a href="index.html">Exit</a></li>
    <li><a href="profile.php" class="active">myProfile</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
  <br>
  <h1 style="text-align: center;">My Profile</h1>
  <hr>
  <div>
      <?php
      $id = $_SESSION['id'];
      $name = $_SESSION['name'];
      $email = $_SESSION['email'];
      echo "<h2>Welcome $name.
      <br>
      Your user id is $id.
      <br>
      Your email is $email</h2>";
      ?>
    </div>
    <div>
        Update details?<a href="update.php">Update</a>
      </div>
  </body>
  </html>