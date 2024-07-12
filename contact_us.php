<?php 
	include_once('config.php');
	include_once('apis/user_class.php');
	include_once('header.php');
?>

				<!-- Contact us form -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="CSS/contact_us.css">
		<title>Contact Us</title>
	</head>
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
