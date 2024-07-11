
						<!------------- Delete contact details by admin ------------>

<?php 

	include_once('config.php');

	if (isset($_POST['delete_contact'])) {
		$id= $_POST['id'];

		$query="DELETE FROM tbl_contact WHERE id='$id'";
		$query_run= mysqli_query($conn,$query);

		if ($query_run) {
			echo '<script> alert("Data deleted successfully")</script>';
			header("location: admin_tasks.php");
		}
		else{
			echo '<script> alert("Data not deleted")</script>';
		}
	}
 ?>