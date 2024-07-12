
<!------ Logout ---------->
<?php 
	include_once('header.php');

	session_start();
	session_destroy();
	header('location:login_form.php');
 ?>