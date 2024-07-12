<?php 
	include_once('config.php');
	include_once('apis/user_class.php');
	include_once('header.php');

if(isset($_GET["err_msg"])){
    echo "<script>alert('". $_GET["err_msg"]. "')</script>";
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="CSS/login_form.css">
		<title>Login & signup form</title>
	</head>
<body>
	<!------ Login Form ---------->

	<div class="container">
		<form method="post" enctype="multipart/form-data" class="column1" onsubmit="return validateLoginForm()">
    		<h1>Login</h1>
			<div class="row">
				<input type="text" id="login-user" name="username" placeholder="Name" required>
			</div>

			<div class="row">
				<input type="password" id="login-pass" name="password" placeholder="Your Password" required>
			</div>

			<div class="row">
				<input type="hidden" name="page_action" value="user_login">
				<button type="submit">Login</button>
			</div>
		</form>


		<!------ SignUp Form ---------->


		<form method="post" enctype="multipart/form-data" class="column2" onsubmit="return validateSignupForm()">
			<h1>Sign Up</h1>
			<div class="row">
				<input type="text" id="signup-user" name="username" placeholder="Your Name" required>
			</div>

			<div class="row">
				<input type="password" id="signup-pass" name="password" placeholder="Your Password" required>
			</div>

			<div class="row">
				<input type="hidden" name="page_action" value="add_user">
				<button type="submit">Signup</button>
			</div>
		</form>
	</div>

	<script>
        //Validation For Login Form

        function validateLoginForm() {
            var username = document.getElementById("login-user").value.trim();
            var password = document.getElementById("login-pass").value.trim();

            if (username === "") {
                alert("Please enter your username.");
                return false;
            }
            return true; 
        }

        //Validation for Sign Up Form
        function validateSignupForm() {
            var username = document.getElementById("signup-user").value.trim();
            var password = document.getElementById("signup-pass").value.trim();

            
            if (username === "") {
                alert("Please enter your username.");
                return false;
            }
            if (password.length < 8) {
                alert("Password must be at least 8 characters long.");
                return false;
            }
            return true; // Form will submit if all validations pass
        }
    </script>
</body>
</html>
