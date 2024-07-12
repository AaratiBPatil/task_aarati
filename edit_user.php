<?php 
	include_once('config.php');
	include_once('apis/user_class.php');
	include_once('header.php');
	$user_details = get_user_details($_REQUEST['id']);
?>

<!-- Edit the data of myaccount form -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Edit User</title>
		<link rel="stylesheet" type="text/css" href="CSS/edit_user.css">
	</head>
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