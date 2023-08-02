<?php
// $_GET
/*
if (isset($_GET['username'],$_GET['regMonth'])){
	$username = $_GET['username'];
	$month = $_GET['regMonth'];

	echo "Welcome $username. You are registered for $month";

} */
// $_POST
if (isset($_POST['username'],$_POST['regMonth'])){
	$username = $_POST['username'];
	$month = $_POST['regMonth'];

	echo "Welcome $username. You are registered for $month";
	
}




?>