<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Sagar Arts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
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
				<li>Earrings</li>
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

							<a href="product.php"><img id="featured" src="images/earring1.jpg" alt=""></a>
						</div>
							<h3><a href="product.php">Classy kundan Earrings</a></h3>
							<h4><a href="product.php">$29.00</a></h4>
							<a href="cart.php" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.php"><img src="images/earring2.jpg" alt=""></a>
							<h3><a href="product.php">kundan and pearl work Earrings </a></h3>
							<h4><a href="product.php">$25.00</a></h4>
							<a href="cart.php" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.php"><img src="images/earring3.jpg" alt=""></a>
							<h3><a href="product.php">Meenakari Earrings</a></h3>
							<h4><a href="product.php">$39.00</a></h4>
							<a href="cart.php" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.php"><img src="images/earring4.jpg" alt=""></a>
							<h3><a href="product.php">Beautiful Meenakari Earrings (Red colour)</a></h3>
							<h4><a href="product.php">$39.00</a></h4>
							<a href="cart.php" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.php"><img src="images/earring5.jpg" alt=""></a>
							<h3><a href="product.php">Alluring kundan and beads work Earrings </a></h3>
							<h4><a href="product.php">$45.00</a></h4>
							<a href="cart.php" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.php"><img src="images/earring6.jpg" alt=""></a>
							<h3><a href="product.php">Golden jhumka </a></h3>
							<h4><a href="product.php">$88.99.00</a></h4>
							<a href="cart.php" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.php"><img src="images/earring7.jpg" alt=""></a>
							<h3><a href="product.php">Attractive Red and Cream combination Earrings</a></h3>
							<h4><a href="product.php">$19.00</a></h4>
							<a href="cart.php" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.php"><img src="images/earring8.jpg" alt=""></a>
							<h3><a href="product.php">Classic indian earring</a></h3>
							<h4><a href="product.php">$55.00</a></h4>
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
