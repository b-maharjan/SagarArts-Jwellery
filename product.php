<?php
include 'config.php';
session_start();
?>
<?php
$sql='SELECT *  FROM product WHERE Product_ID='.$_GET['id'];
$result=mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);

 ?>

<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>SagarArts&Jewellery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
		<!-- HEADER -->
		<?php include 'includes/topnav.php'; ?>

<!-- NAVBAR -->
<?php include 'includes/navbar.php'; ?>

	<div id="breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Product page</li>
			</ul>
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

	<div id="body">
		<div class="container">
			<div id="content" class="full">
				<div class="product">
					<div class="image">
						<div id="img-container">
							<div id="lens"></div>
						<img id="featured" src="images/<?php echo $row['Product_Photo'];?>" alt="">
					</div>
					<div class="details">
						<h1><?php echo $row['Product_Name'];?></h1>
						<h4><?php echo $row['Product_Price'];?></h4>
						<div class="entry">
							<p>Modern mangalsutra made with round and baguette diamonds.</p>
							<div class="tabs">
								<div class="nav">
									<ul>
										<li class="active"><a href="#desc">Description</a></li>

									</ul>
								</div>
								<div class="tab-content active" id="desc">
									<p><?php echo $row['Product_Description'];?> </p>
								</div>

							</div>
						</div>
						<div class="actions">
							<label>Quantity:</label>
							<select><option>1</option></select>
							<a href="cart.php?p=<?php echo $row['Product_ID'];?>" class="btn-grey">Add to cart</a>
						</div>
					</div>
				</div>
			</div>
			<!-- / content -->
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->
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
	<script src="js/script.js"></script>
</body>
</html>
