<?php 
	include_once('config.php');
	include_once('header.php');
	include_once('apis/user_class.php');
 ?>
 
 				 <!-- Admin Login Form -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="CSS/admin.css">
		<title>Admin</title>
	</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<div class="container">
        	<div class="column">
        		<h1>Admin Login</h1>

		        <div class="row">
		        	<input type="text" name="username" placeholder="Name" required>
		        </div>

		        <div class="row">
		        	<input type="password" name="password" placeholder="Your Password" required>
		        </div>

		        <div class="row">
		        	<input type="hidden" name="page_action" value="admin_login">
		        	<button type="submit">Login</button>
		        </div>
			</div>
		</div>
	</form>
</body>
</html>
