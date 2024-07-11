<?php 
	include_once('config.php');
	include_once('apis/user_class.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		.wrapper {
			display: flex;
			flex-direction: row;
			align-items: flex-start;
			width: 100%;
			max-width: 1200px;
			gap: 20px;
		}
		.container {
			background-color: white;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			width: 300px;
			box-sizing: border-box;
		}
		h1 {
			margin-bottom: 20px;
			font-size: 24px;
			text-align: center;
		}
		.row {
			margin-bottom: 15px;
		}
		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}
		input[type="text"],
		input[type="file"] {
			width: 100%;
			padding: 8px;
			box-sizing: border-box;
			border: 1px solid #ccc;
			border-radius: 4px;
		}
		button {
			width: 45%;
			padding: 10px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		button:hover {
			background-color: #45a049;
		}
		.table-container {
			background-color: white;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			width: 100%;
			max-width: 800px;
		}
	</style>
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
							<td><?php echo $i++; ?></td>
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
