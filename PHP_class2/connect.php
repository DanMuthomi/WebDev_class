<?php
	$server = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'class';

	$connect = mysqli_connect($server,$user,$password,$db);
	if (!$connect) {
		die(mysql_error($connect));
	}
?>