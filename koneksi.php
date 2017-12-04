<?php 
	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	mysqli_connect($db_host, $db_user, $db_password);

	$db_name = "kolektor_db";
	mysqli_select_db($db_name);


/*
	$conn = new mysqli_connect('localhost','root','','kolektor_db');
*/
	
 ?>