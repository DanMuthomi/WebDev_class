<?php
  include 'connect.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    //encrypt password
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO cat2(name,email,password) VALUES('$name','$email','$password')";
    $result = mysqli_query($connect,$sql);
    if ($result) {
      echo "signup successfully";
      header("location:login.php");
    }
    else{
      echo "Not successful";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signup</title>
  <link rel="stylesheet" type="text/css" href="navBar.css">
  <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
  <br>
  <ul class="navBar">
    <li><a href="index.html">Exit</a></li>
    <li><a href="login.php" class="active">Login</a></li>
  </ul>
  <br>
  <h1 style="text-align: center;">Signup</h1>
  <hr>
  <div class="register">
    <form id="form" class="form" method="post">
      <label>username</label>
      <input type="text" class="name" id="name" name="name" placeholder="Enter your username">
      <label>Email Address</label>
      <input type="text" class="email" id="email" name="email" placeholder="Enter email">
      <label>Password</label>
      <input type="password" class="password" id="password" name="password" placeholder="Enter password">
      <input type="submit" name="submit" value="Signup">
      <div>
        Have an account?<a href="login.php">Login</a>
      </div>
    </form>
  </div>
</body>
</html>