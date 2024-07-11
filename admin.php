<?php 
	include_once('config.php');
	include_once('apis/user_class.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body {
			margin: 0;
			background-color: #f4f4f9;
			font-family: Arial, sans-serif;
		}
		.container {
			width: 400px;
			padding: 20px;
			box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
			background-color: white;
			border-radius: 10px;
			margin-top: 50px; 
			margin-left: 50px; 
		}
		.container h1 {
			text-align: center;
			margin-bottom: 20px;
		}
		.column {
			display: flex;
			flex-direction: column;
			align-items: flex-start;
		}
		.row {
			margin: 10px 0;
			width: 100%;
		}
		.row input,
		.row button {
			width: 100%; 
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		.row input {
			margin-bottom: 10px;
		}
		.row button {
			width: 30%; 
			background-color: #007bff;
			border: none;
			color: white;
			border-radius: 17px; 
			cursor: pointer;
		}
		.row button:hover {
			background-color: #0056b3;
		}
	</style>
</head>
 
 				 <!-- Admin Login Form -->


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
