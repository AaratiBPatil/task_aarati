<?php 
	include_once('config.php');
	include_once('apis/user_class.php');
	include_once('header.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="CSS/account.css">
		<title>My account</title>
	</head>

<body>
		 <!-- My Account Form -->

	<div class="wrapper">
		<form method="post" enctype="multipart/form-data">
			<div class="container">
				<h1>My account</h1>
				<div class="row">
					<label for="name">Name</label>
					<input type="text" name="name" required>
				</div>
				
				<div class="row">
					<label for="picture">Upload Image</label>
					<input type="file" name="picture" required>
				</div>
				
				<div class="row">
					<input type="hidden" name="page_action" value="add_myaccount">
					<button type="submit">Submit</button>
				</div>
			</div>
		</form>

		 <!-- Listing of account details with edit and delete action -->

		<div class="table-container">
			<table class="table table-bordered">
				<thead class="table-dark">
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Image</th>
						<th>Delete</th>
						<th>Update</th>
					</tr>
				</thead>

				<tbody>
					<?php 
						$i=1;
						$sql = "SELECT * FROM tbl_myaccount";
						$query_run = mysqli_query($conn, $sql);

						if ($query_run) {
							while ($row = mysqli_fetch_array($query_run)) {
					?>			
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td class="text-center align-middle"><img src="uploads/<?php echo $row['picture']; ?>" width="50px" height="30px" alt=""></td>
							<td class="text-center align-middle">
								<form action="delete_user.php" method="post">
									<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
									<button type="submit" name="delete" class="btn btn-danger">Delete</button>
								</form>
							</td>
							<td class="text-center align-middle">
								<form action="edit_user.php" method="post">
									<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
									<button type="submit" class="btn btn-primary">EDIT</button>
								</form>
							</td>
						</tr>
						<?php 	
							$i++;
							}
						} else {
							echo "<tr><td colspan='5'>No record found</td></tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
