<?php

include 'config.php';

//error_reporting(0);

//session_start();

//if (isset($_SESSION['username'])) {
    //header("Location: login.php");
//
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";

        header('Location: login.php');
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}

	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sagar Arts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	<link rel="stylesheet" media="all" href="./css/forms.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-- HEADER -->
<?php include 'includes/topnav.php'; ?>



<!-- BODY -->
<table>
	<div class="sign">
	<p class="login-text" >Register</p>

			<form action="register.php" method="POST" class="login-email">
				<div class="form-group">
					<label for="Username">Username</label  >
					<input class="form-control" type="text" placeholder="Username" name="username"  required>
				</div>
				<div class="form-group">
				<label for="Email">Email</label  >
					<input class="form-control" type="email" placeholder="Email" name="email"  required>
				</div>
				<div class="form-group">
					<label for="Password">Password</label  >
					<input class="form-control" type="password" placeholder="Password" name="password"  required>
				</div>
				<div class="form-group">
					<label for="cpassword">Confirm Password</label  >
					<input class="form-control" type="password" placeholder="Confirm Password" name="cpassword"  required>
				</div>
				<div class="btn-wrap">
				<button name="submit" class="submit-btn">Register</button>
				</div>
				<p class="text-center mt-2">Have an account? <a  href="login.php">Login Here</a></p>

			</form>
		</div>

</table>

</body>

<footer id="footer">
	<div class="container">
		<div class="cols">
			<div class="col">
			</div>
			<div class="col media">
				<h3>Social media</h3>
				<ul class="social">

					<li><a href="https://www.facebook.com/SagarArts04/"><span class="ico ico-fb"></span>Facebook</a></li>
					<li><a href="#"><span class="ico ico-tw"></span>Twitter</a></li>
					<li><a href="#"><span class="ico ico-gp"></span>Google+</a></li>
					<li><a href="#"><span class="ico ico-pi"></span>Pinterest</a></li>
				</ul>
			</div>
			<div class="col contact">
				<h3>Contact us</h3>
				<p>SagarArts INC.<br>Prospect Adelaide<br>South Australia</p>
				<p><span class="ico ico-em"></span><a href="#">anmolkhnija@outlook.com</a></p>
				<p><span class="ico ico-ph"></span><a href="tel:0490 372 545">0490 372 545</a></p>
			</div>
			<div class="col newsletter">
				<h3>Give us a chance to improve ourself</h3>
				<p>we would love to hear from you. give us a review and help us to serve you better.</p>
				<form action="#">
					<input type="text" placeholder="Write your review here">
					<button type="submit"></button>
				</form>
			</div>
		</div>
		<p class="copy">Copyright 2013 Jewelry. All rights reserved.</p>
	</div>
	<!-- / container -->
</footer>
<!-- / footer -->

  	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
  	<script src="js/plugins.js"></script>
  	<script src="js/main.js"></script>


  </html>
