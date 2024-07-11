<?php 
require 'config.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style type="text/css">
        body {
            background-image: url("./uploads/background.avif");
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: relative;
        }
        .header {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
        }
        .header .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .header .nav {
            display: flex;
            align-items: center;
        }
        .header .nav a {
            color: white;
            text-decoration: none;
            padding: 0 15px;
        }
        .header .nav .dropdown {
            position: relative;
            display: inline-block;
        }
        .header .nav .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        .header .nav .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .header .nav .dropdown-content a:hover {
            background-color: #ddd;
        }
        .header .nav .dropdown:hover .dropdown-content {
            display: block;
        }
        #carouselExampleControls {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            z-index: 0;
        }
        .carousel-item {
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            padding: 10px;
        }
        .carousel-caption {
		    position: absolute;
		    top: 60%;
		    left: 50%;
		    transform: translate(-50%, -50%);
		    color: white;
		    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
		}
    </style>

    <!-- Alert messeages for particular actions  -->

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const urlParams = new URLSearchParams(window.location.search);
            const msg = urlParams.get('msg');
            if (msg) {
                let alertMessage = '';
                switch (msg) {
                    case '1':
                        alertMessage = 'Signup successfully done...!!!';
                        break;
                    case '2':
                        alertMessage = 'Contact added successfully...!!!';
                        break;
                    case '3':
                        alertMessage = 'Account details added successfully...!!!';
                        break;

                    case '4':
                        alertMessage = 'You are logged in successfully...!!!';
                        break;

                    case '5':
                        alertMessage = 'Admin login is done successfully...!!!';
                        break;

                    case '6':
                        alertMessage = 'User data is edited...!!!';
                        break;

                    case '7':
                        alertMessage = 'Contact details are edited...!!!';
                        break;
                }
                if (alertMessage) {
                    alert(alertMessage);
                }
            }
        });
    </script>
</head>
<body>


<!-- User session is maintained over here -->

<div class="header">
    <div class="logo">
    	Logo
    </div>
    <div class="nav">
        <?php if (!isset($_SESSION['username']) || empty($_SESSION['username'])) : ?>
            <a href="login_form.php">Login</a>
        <?php else : ?>
            <a href="index.php">Home</a>
            <a href="account.php">My account</a>
            <a href="contact_us.php">Contact Us</a>
            <a href="admin.php">Admin Login</a>
            <div class="dropdown">
                <a href="javascript:void(0)"><?php echo htmlspecialchars($_SESSION['username']); ?></a>
                <div class="dropdown-content">
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>


 <!-- If user is logged in then carousel slider appears fetching images from myaccount  -->


<?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) : ?>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            $i = 0;
            $query = "SELECT * FROM tbl_myaccount";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                $activeClass = ($i === 0) ? 'active' : '';
                ?>
                <div class="carousel-item <?php echo $activeClass; ?>" style="background-image: url('uploads/<?php echo $row['picture']; ?>');">
                </div>
                <div class="carousel-caption">
                    <h1>Welcome <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
                </div>>
                <?php
                $i++;
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<?php endif; ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>
</html>