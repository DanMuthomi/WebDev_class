<?php
	include 'connect.php';
	session_start();
	if (isset($_SESSION['id'])){
		$id = $_SESSION['id'];
		$sql = "DELETE FROM cat2 WHERE userid=$id";
	$result = mysqli_query($connect,$sql);
	if ($result){
		//echo "Delete successful";
		header("location:login.php");
	}
	else{
		echo "Not successful";
	}
	}
?>