<?php
  include 'connect.php';
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($connect,$sql);
    if ($result) {
      $rownumber = mysqli_num_rows($result);
      if ($rownumber>0) {
        $row =mysqli_fetch_assoc($result);
        $id = $row['id'];
        $email = $row['email'];
        $passwordhash = $row['password'];
        if (password_verify($password, $passwordhash)) {
          //echo "Login successful";
          //sessions
          session_start();
          $_SESSION['id'] = $id;
          $_SESSION['email'] = $email;
          header('location:home.php');
        }
      }
      else{
        echo "Email or password incorrect";
      }
    }
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <div class="container">
    <h1 class="text-center">login</h1>
    <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  <div>No account?<a href="signup.php">Signup</a>
  </div>
</form>
</div>
  </body>
</html>
