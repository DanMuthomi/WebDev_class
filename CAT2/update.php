<?php
	include 'connect.php';
	session_start();
	if (isset($_SESSION['id'])){
		$id = $_SESSION['id'];
	$mysql = "SELECT * FROM cat2 WHERE userid=$id";
	$result = mysqli_query($connect,$mysql);
	if ($result) {
		$row = mysqli_fetch_assoc($result);
		$name = $row['name'];
		$email = $row['email'];
	}
	// $_SERVER
	if ($_SERVER['REQUEST_METHOD']=="POST"){
		$name = mysqli_real_escape_string($connect,$_POST['name']);
		$email = mysqli_real_escape_string($connect,$_POST['email']);
	$sql = "UPDATE cat2 SET name='$name', email='$email' WHERE userid=$id";
	$result = mysqli_query($connect, $sql);
	if ($result){
		header("location:login.php");
		//echo "Updated successfully";
	} else {
		echo "Not registered";
	}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update</title>
  <link rel="stylesheet" type="text/css" href="navBar.css">
  <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
  <br>
  <ul class="navBar">
    <li><a href="index.html">Exit</a></li>
    <li><a href="profile.php">myProfile</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
  <br>
  <h1 style="text-align: center;">Update</h1>
  <hr>
  <div class="register">
    <form id="form" class="form" method="post">
      <label>username</label>
      <input type="text" class="name" id="name" name="name" value="<?php echo $name;?>" placeholder="Enter your username">
      <label>Email Address</label>
      <input type="text" class="email" id="email" name="email" value="<?php echo $email;?>" placeholder="Enter email">
      <input type="submit" name="submit" value="Update">
      <div>
        Delete account?<a href="delete.php">Delete</a>
      </div>
    </form>
  </div>
</body>
</html>