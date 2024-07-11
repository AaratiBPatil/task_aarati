<?php 

	/// Delete data from account form

	include_once('config.php');

	if (isset($_POST['delete'])) {
		$id= $_POST['id'];

		$query="DELETE FROM tbl_myaccount WHERE id='$id'";
		$query_run= mysqli_query($conn,$query);

		if ($query_run) {
			echo '<script> alert("Data deleted successfully")</script>';
			header("location: account.php");
		}
		else{
			echo '<script> alert("Data not deleted")</script>';
		}
	}
 ?>