<?php 
	include_once('config.php');
	include_once('header.php');
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="CSS/index.css">
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