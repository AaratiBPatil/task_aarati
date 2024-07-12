
									<!------ Admin Panel ---------->

									
<?php 
	require 'config.php';
	session_start();
	include_once('header.php');
?>

									<!------ Listing of contact details  ---------->

<!DOCTYPE html>
<html>
	<head>
	    <title>Welcome Page</title>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="CSS/admin_tasks.css">
	</head>
<body>

		<div class="heading">
		    Welcome <?php echo $_SESSION['username']; ?>
		</div>

		<div class="logout">
		    <a href="admin_logout.php" class="btn btn-secondary">Logout</a>
		</div>

		<div class="table-container">
		    <table class="table table-bordered">

		        <thead class="table-dark">
		            <tr>
		                <th>Id</th>
		                <th>Username</th>
		                <th>City</th>
		                <th>Address</th>
		                <th>Message</th>
		                <th>Action</th>
		            </tr>
		        </thead>

		        <tbody>
		            	<?php 
			                $i = 1;
			                $sql = "SELECT * FROM tbl_contact";
			                $query_run = mysqli_query($conn, $sql);

			                if ($query_run) {
			                    while ($row = mysqli_fetch_array($query_run)) {
		            	?>          
		                <tr>
		                    <td><?php echo $i; ?></td>
		                    <td><?php echo $row['username']; ?></td>
		                    <td><?php echo $row['city']; ?></td>
		                    <td><?php echo $row['address']; ?></td>
		                    <td><?php echo $row['message']; ?></td>                           
		                    <td>
		                        <form action="delete_contact.php" method="post" style="display:inline;">
		                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
		                            <input type="submit" name="delete_contact" class="btn btn-danger" value="Delete">
		                        </form>   

		                        <form action="edit_contact.php" method="post" style="display:inline;">
		                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
		                            <input type="submit" class="btn btn-primary" value="EDIT">
		                        </form>
		                    </td>
		                </tr>
		            	<?php   
		                    $i++;
		                    }
		                } else {
		                    echo "<tr><td colspan='6'>No record found</td></tr>";
		                }
		            ?>
		        </tbody>
		    </table>
		</div>

	</body>
</html>
