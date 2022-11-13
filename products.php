
<?php
include 'config.php';
session_start();
?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Sagar Arts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

			<?php include 'includes/topnav.php'; ?>

<!-- NAVBAR -->
<?php include 'includes/navbar.php'; ?>

	<div id="breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Product results</li>
			</ul>
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

	<div id="body">
		<div class="container">
			<div class="pagination">
				<ul>
					<li><a href="#"><span class="ico-prev"></span></a></li>
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#"><span class="ico-next"></span></a></li>
				</ul>
			</div>
			<div class="products-wrap">
				<aside id="sidebar">
					<div class="widget">
						<h3>Products per page:</h3>
						<fieldset>
							<input checked type="checkbox">
							<label>8</label>
							<input type="checkbox">
							<label>16</label>
							<input type="checkbox">
							<label>32</label>
						</fieldset>
					</div>
					<div class="widget">
						<h3>Sort by:</h3>
						<fieldset>
							<input checked type="checkbox">
							<label>Popularity</label>
							<input type="checkbox">
							<label>Date</label>
							<input type="checkbox">
							<label>Price</label>
						</fieldset>
					</div>
					<div class="widget">
						<h3>Condition:</h3>
						<fieldset>
							<input checked type="checkbox">
							<label>New</label>
							<input type="checkbox">
							<label>Used</label>
						</fieldset>
					</div>
					<div class="widget">
						<h3>Price range:</h3>
						<fieldset>
							<div id="price-range"></div>
						</fieldset>
					</div>
				</aside>
				<div id="content">
					<section class="products">
						<article>
							<div id="img-container">

							<a href="product.php"><img id="featured" src="images/11.jpg" alt=""></a>
						</div>
							<h3><a href="product.php">necklaces</a></h3>
							<h4><a href="product.php">$109.00</a></h4>
							<a href="cart.php" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.php"><img src="images/12.jpg" alt=""></a>
							<h3><a href="product.php">Bracelets</a></h3>
							<h4><a href="product.php">$79.00</a></h4>
							<a href="cart.php" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.php"><img src="images/13.jpg" alt=""></a>
							<h3><a href="product.php">Lightweight Pasa set</a></h3>
							<h4><a href="product.php">$39.00</a></h4>
							<a href="cart.php" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.php"><img src="images/14.jpg" alt=""></a>
							<h3><a href="product.php">Earrings</a></h3>
							<h4><a href="product.php">$29.00</a></h4>
							<a href="cart.php" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.php"><img src="images/15.jpg" alt=""></a>
							<h3><a href="product.php">Tikka set</a></h3>
							<h4><a href="product.php">$39.00</a></h4>
							<a href="cart.php" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.php"><img src="images/1.jpg" alt=""></a>
							<h3><a href="product.php">Designer Rings</a></h3>
							<h4><a href="product.php">$15.00</a></h4>
							<a href="cart.php" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.php"><img src="images/16.jpg" alt=""></a>
							<h3><a href="product.php">Meenakari style Earrings</a></h3>
							<h4><a href="product.php">$19.00</a></h4>
							<a href="cart.php" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.php"><img src="images/17.jpg" alt=""></a>
							<h3><a href="product.php">Bangle</a></h3>
							<h4><a href="product.php">$88.00</a></h4>
							<a href="cart.php" class="btn-add">Add to cart</a>
						</article>
					</section>
				</div>
				<!-- / content -->
			</div>
			<div class="pagination">
				<ul>
					<li><a href="#"><span class="ico-prev"></span></a></li>
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#"><span class="ico-next"></span></a></li>
				</ul>
			</div>
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

</body>
</html>
