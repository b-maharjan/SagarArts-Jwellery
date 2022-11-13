<?php include 'config.php';?>

<?php
session_start();
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' and password='$password'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		$_SESSION['id'] = $row['id'];
		if($row['user-level']==1){
			header("Location:Admin/pages/product-details.php");
		}else{
		header("Location: index.php");
	}
}else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>Sagar Arts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="./css/style.css">
	<link rel="stylesheet" media="all" href="./css/forms.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<!-- HEADER -->
<?php include 'includes/topnav.php'; ?>


<!-- BODY -->
<table>
	<div class="sign">
	<h3 class="login-text" >Login</h3>

			<form action="" method="POST" class="login-email">
					<input type="email" class="form-control" placeholder="Email" name="email" value="" required>
					<input type="password" class="form-control" placeholder="Password" name="password" value="" required>
					<p class="login-register-text text-centers">Don't have an account? <a href="register.php">Register Here</a></p>
					<div class="btn-wrap mt-3">
					<button  class="submit-btn" type="submit" name="submit" class="btn">Login</button>

					</div>
				</form>
		</div>

</table>

<!-- FOOTER -->
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
  	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
  	<script src="js/plugins.js"></script>
  	<script src="js/main.js"></script>
</body>

  </html>
