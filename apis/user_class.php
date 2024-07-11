<?php 

/// File contains functions to edit, delete, fetch data from database  

	/// User login

	function add_user(){
    global $conn;

    $checkUserQ = "SELECT * FROM tbl_users WHERE username='". $_REQUEST['username']."'";
    // echo $checkUserQ;
    $checkUserQResult = mysqli_query($conn, $checkUserQ);
    if (mysqli_num_rows($checkUserQResult) == 0) {
        $query = "INSERT INTO tbl_users(username,password) values('" . $_REQUEST['username'] . "','" . md5($_REQUEST['password']) . "')";
        mysqli_query($conn, $query);
        header('location:login_form.php?msg=1');
    }else{
        header('location:login_form.php?err_msg=username_exists');
    }
}


	/// To save contant details to db

	function add_contact(){
		global $conn;

		$filename=rand().'_'.$_FILES['image']['name'];

		move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$filename);

		mysqli_query($conn,"INSERT INTO `tbl_contact` SET 
			`username`='".$_REQUEST['username']."',
			`address`='".$_REQUEST['address']."',
			`city`='".$_REQUEST['city']."',
			`image`='".$filename."',
			`message`='".$_REQUEST['message']."'
			");
		header('location:index.php?msg=2');
	}

	/// To save myaccount form details to db

	function add_myaccount(){
		global $conn;

		$filename=rand().'_'.$_FILES['picture']['name'];

		move_uploaded_file($_FILES['picture']['tmp_name'], 'uploads/'.$filename);

		mysqli_query($conn,"INSERT INTO `tbl_myaccount` SET 
			`name`='".$_REQUEST['name']."',
			`picture`='".$filename."'
			");
		header('location:account.php?msg=3');
	}

	/// To log in user

	function user_login(){
		global $conn;

		$query=mysqli_query($conn,"SELECT * FROM `tbl_users` WHERE `username`='".$_REQUEST['username']."' and `password`='".md5($_REQUEST['password'])."' and role='user'");

			// echo $query;
			if(mysqli_num_rows($query)==1){
				$row=mysqli_fetch_assoc($query);
				session_start();
				$_SESSION['username'] =$_REQUEST['username'];	
				header('location:index.php');
			}else{
				header('location:login_form.php?msg=4');	
			}	
	}

	/// admin login

	function admin_login(){
		global $conn;

		$query=mysqli_query($conn,"SELECT * FROM `tbl_users` WHERE `username`='".$_REQUEST['username']."' and `password`='".md5($_REQUEST['password'])."' and role='admin'");

			// echo $query;
			if(mysqli_num_rows($query)==1){
				$row=mysqli_fetch_assoc($query);
				session_start();
				$_SESSION['username'] =$_REQUEST['username'];
				header('location:admin_tasks.php');
			}else{
				header('location:admin.php?msg=5');	
		}	
	}

	/// Edit user details from myaccount form

	function edit_user(){
	
		global $conn;
	
		$file_name=$str="";
		if($_FILES['picture']['name']!=""){


		$file_name=rand().'_'.$_FILES['picture']['name'];

		move_uploaded_file($_FILES['picture']['tmp_name'], 'uploads/'.$file_name);
		$str=",`picture`='".$file_name."'";
	}
		mysqli_query($conn,"UPDATE `tbl_myaccount` SET 
		`name`='".$_REQUEST['name']."',
		`picture`='".$file_name."'
		$str
		WHERE `id`='".$_REQUEST['id']."'
		");
		header('location:account.php?msg=6');	
	}


	/// Edit contact details from contact us form

	function edit_contact(){
	
		global $conn;

		$file_name=$str="";
		if($_FILES['image']['name']!=""){


		$file_name=rand().'_'.$_FILES['image']['name'];

		move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$file_name);
		$str=",`image`='".$file_name."'";
	}
	
		mysqli_query($conn,"UPDATE `tbl_contact` SET 
			`username`='".$_REQUEST['username']."',
			`address`='".$_REQUEST['address']."',
			`city`='".$_REQUEST['city']."',
			`message`='".$_REQUEST['message']."',
			`image`='".$file_name."'
			$str
			WHERE `id`='".$_REQUEST['id']."'
		");
		header('location:admin_tasks.php?msg=7');	
	}


	///  To fetch data for listing of user details on myaccount form

	function get_user_details($id){
		global $conn;

		$query=mysqli_query($conn,"SELECT * FROM `tbl_myaccount` WHERE `id`='".$id."'");
		if(mysqli_num_rows($query)==1){
			return mysqli_fetch_assoc($query);
		}
		return false;
	}


	///  To fetch data for listing of contact details at admin panel


	function get_contact_details($id){
		global $conn;

		$query=mysqli_query($conn,"SELECT * FROM `tbl_contact` WHERE `id`='".$id."'");
		if(mysqli_num_rows($query)==1){
			return mysqli_fetch_assoc($query);
		}
		return false;
	}

	/// By checking page action calling a function

	if(isset($_REQUEST['page_action'])){
		switch ($_REQUEST['page_action']) {
			case 'add_user':
				add_user();
				break;

			case 'user_login':
				user_login();
				break;

			case 'admin_login':
				admin_login();
				break;

			case 'add_contact':
				add_contact();
				break;

			case 'add_myaccount':
				add_myaccount();
				break;

			case 'edit_user':
				edit_user();
				break;

			case 'edit_contact':
				edit_contact();
				break;
		}
	}
 ?>

