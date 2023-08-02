<?php 
	include "connect.php";
	// $_SERVER
	if ($_SERVER['REQUEST_METHOD']=="POST"){
		$username = $_POST['username'];
		$month = $_POST['regMonth'];
$sql = "INSERT INTO registration(username,regMonth) VALUES('$username','$month') ";
	$result = mysqli_query($connect, $sql);
	if ($result){
		//echo "Registered successfully";
		header("location:display.php");
	} else {
		echo "Not registered";
	}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SignUp</title>
</head>
<body>
	<?php 
			$months = array("January","February","March", "April");
		?>
	<h1>Registration</h1>
	<form action="signup.php" method="post">
		<label>Username</label>
		<input type="text" name="username" placeholder="Enter Username">

		<label>Registration Month</label>
		<select name="regMonth">
			<option>--Select Month--</option>
			<?php 
	foreach ($months as $month){
		echo "<option>$month</option>";
		}
			?>
		
		</select>
		<input type="submit" name="submit">
	</form>

</body>
</html>