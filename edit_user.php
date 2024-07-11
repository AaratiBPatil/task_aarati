<?php 
	include_once('config.php');
	include_once('apis/user_class.php');
	$user_details = get_user_details($_REQUEST['id']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit User</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			margin: 20px; 
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 90vh;
		}
		form {
			background: #fff;
			padding: 20px;
			width: 400px; 
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			border-radius: 8px;
			box-sizing: border-box;
			margin-top: 20px; 
			margin-bottom: 20px; 
		}
		h2 {
			text-align: center;
			margin-bottom: 20px;
		}
		div {
			margin-bottom: 15px;
		}
		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}
		input[type="text"],
		input[type="file"] {
			padding: 8px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			width: 90%; 
			max-width: 80%; 
		}
		input[type="submit"] {
			background: #007bff;
			color: #fff;
			padding: 10px 15px;
			border: none;
			border-radius: 17px; 
			cursor: pointer;
			width: 30%; 
			box-sizing: border-box;
			display: block;
			margin: 0 auto; 
		}
		input[type="submit"]:hover {
			background: #0056b3;
		}
		img {
			display: block;
			max-width: 100%;
			height: auto;
			width: 30%; 
			max-height: 130px;
			margin-bottom: 10px; 
		}
	</style>
</head>

<!-- Edit the data of myaccount form -->

<body>
	<form method="post" enctype="multipart/form-data">
		<h2>Update Account Details</h2>
		<div>
			<label for="name">Name</label>
			<input type="text" id="name" name="name" value="<?php if(isset($user_details['name'])){ echo htmlspecialchars($user_details['name']); } ?>">
		</div>
		<div>
			<img src="uploads/<?php echo htmlspecialchars($user_details['picture']); ?>" alt="User Picture">
		</div>
		<div>
			<label for="picture">Upload Image</label>
			<input type="file" id="picture" name="picture">
		</div>
		<div>
			<input type="hidden" name="page_action" value="edit_user">
			<input type="hidden" name="id" value="<?php echo htmlspecialchars($_REQUEST['id']); ?>">
			<input type="submit" value="Update">
		</div>
	</form>
</body>
</html>