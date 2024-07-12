
<!------ Admin logout ---------->

<?php 
	include_once('header.php'); 

	session_start();
	session_destroy();
	header('location:index.php');
 ?>