<?php 


	/// database connections

	
	session_start();
	error_reporting(0);
	$conn=mysqli_connect('localhost','root','','task_db');

	if (!$conn) {
    	die('Database connection failed: ' . mysqli_connect_error());
	}
 ?>