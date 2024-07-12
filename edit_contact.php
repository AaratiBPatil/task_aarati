<?php 
	include_once('config.php');
	include_once('apis/user_class.php');
	include_once('header.php');
	$contact_details = get_contact_details($_REQUEST['id']);
?>

								<!------ Edit contact details by admin ---------->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="CSS/edit_contact.css">
		<title>Edit contact</title>
	</head>								
<body>
	<form method="post" enctype="multipart/form-data">
		<h2>Update Contact Details</h2>

		<div>
			<label for="username">Username</label>
			<input type="text" id="username" name="username" value="<?php if(isset($contact_details['username'])){ echo $contact_details['username']; } ?>">
		</div>

		<div>
			<label for="address">Address</label>
			<input type="text" id="address" name="address" value="<?php if(isset($contact_details['address'])){ echo $contact_details['address']; } ?>">
		</div>

		<div class="row">
			<label for="city">Your City</label>
			<select id="city" name="city" required>
				<option value="">Select your city</option>
				<option value="kolhapur" <?php if(isset($contact_details['city']) && $contact_details['city'] == 'kolhapur') echo 'selected'; ?>>Kolhapur</option>
				<option value="satara" <?php if(isset($contact_details['city']) && $contact_details['city'] == 'satara') echo 'selected'; ?>>Satara</option>
				<option value="sangli" <?php if(isset($contact_details['city']) && $contact_details['city'] == 'sangli') echo 'selected'; ?>>Sangli</option>
				<option value="pune" <?php if(isset($contact_details['city']) && $contact_details['city'] == 'pune') echo 'selected'; ?>>Pune</option>
				<option value="solapur" <?php if(isset($contact_details['city']) && $contact_details['city'] == 'solapur') echo 'selected'; ?>>Solapur</option>
			</select>
		</div>

		<div class="row">
			<?php 
				$img_name = $contact_details['image'];
				if($contact_details['image'] != '' && file_exists('uploads/' . $contact_details['image'])){
					$img_name = $contact_details['image'];
				}
			?>
			<img src="uploads/<?php echo $img_name; ?>" style="height:50px !important; width:50px !important;">
			<label for="image" style="margin-left: 10px;">Upload Image</label>
			<input type="file" id="image" name="image">
		</div>

		<div class="row">
			<label for="message">Your Message</label>
			<textarea id="message" name="message" required><?php if(isset($contact_details['message'])){ echo htmlspecialchars($contact_details['message']); } ?></textarea>
		</div>

		<div>
			<input type="hidden" name="page_action" value="edit_contact">
			<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
			<input type="submit" value="Update">
		</div>

	</form>
</body>
</html>
