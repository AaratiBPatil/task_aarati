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
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh; 
			margin: 0;
			background-color: #f4f4f9;
		}
		.container {
			width: 800px; 
			max-width: 100%;
			padding: 20px;
			box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3); 
			background-color: white;
			border-radius: 10px;
			box-sizing: border-box; 
		}
		.container h1 {
			text-align: center;
			margin-bottom: 10px; 
		}
		.row {
			margin: 5px 0; 
			width: 100%;
			display: flex;
			flex-direction: column;
			align-items: flex-start; 
		}
		.row label {
			display: block;
			margin-bottom: 3px; 
			font-weight: bold;
		}
		.row input,
		.row select,
		.row textarea {
			width: 100%;
			padding: 8px; 
			border: 1px solid #ccc;
			border-radius: 4px;
			margin-bottom: 8px; 
			box-sizing: border-box;
		}
		.row textarea {
			height: 70px; 
		}
		.row button {
			width: 40%; 
			padding: 8px; 
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

				<!-- Contact us form -->

<body>
	<form method="post" enctype="multipart/form-data">
		<div class="container">
			<h1>Contact Us</h1>
			<div class="row">
				<label for="username">Your Name</label>
				<input type="text" name="username" required>
			</div>
			<div class="row">
				<label for="address">Your Address</label>
				<input type="text" name="address" required>
			</div>
			<div class="row">
				<label for="city">Your City</label>
				<select name="city" required>
					<option value="">Select your city</option>
					<option value="kolhapur">Kolhapur</option>
					<option value="satara">Satara</option>
					<option value="sangli">Sangli</option>
					<option value="pune">Pune</option>
					<option value="solapur">Solapur</option>
				</select>
			</div>
			<div class="row">
				<label for="image">Upload Image</label>
				<input type="file" name="image" required>
			</div>
			<div class="row">
				<label for="message">Your Message</label>
				<textarea name="message" required></textarea>
			</div>
			<div class="row">
				<input type="hidden" name="page_action" value="add_contact">
				<button type="submit">Contact Us</button>
			</div>
		</div>
	</form>
</body>
</html>
