<?php
  include 'connect.php';
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM cat2 WHERE name='$name'";
    $result = mysqli_query($connect,$sql);
    if ($result) {
      $rownumber = mysqli_num_rows($result);
      if ($rownumber>0) {
        $row =mysqli_fetch_assoc($result);
        $id = $row['userid'];
        $name = $row['name'];
        $email = $row['email'];
        $passwordhash = $row['password'];
        if (password_verify($password, $passwordhash)) {
          //echo "Login successful";
          //sessions
          session_start();
          $_SESSION['id'] = $id;
          $_SESSION['name'] = $name;
          $_SESSION['email'] = $email;
          header('location:profile.php');
        }
      }
      else{
        echo "Email or password incorrect";
      }
    }
  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
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
  <h1 style="text-align: center;">login</h1>
  <hr>
  <div class="register">
    <form id="form" class="form" method="post">
      <label>username</label>
      <input type="text" class="name" id="name" name="name" placeholder="Enter your username">
      <label>Password</label>
      <input type="password" class="password" id="password" name="password" placeholder="Enter password">
      <input type="submit" name="submit" value="Login">
      <div>
        No account?<a href="signup.php">Signup</a>
      </div>
    </form>
  </div>
</body>
</html>
