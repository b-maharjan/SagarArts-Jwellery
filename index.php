<?php
include 'config.php';
session_start();
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Sagar Arts & Jewellery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<!-- HEADER -->
	<?php include 'includes/topnav.php'; ?>

	<!-- NAVBAR -->
	<?php include 'includes/navbar.php'; ?>

	<!-- SLIDER -->
	<div id="slider">
		<ul>
			<li style="background-image: url(images/0.jpg)">
				<h3>Make your life better</h3>
				<h2>sparkling earrings</h2>
				<a href="#" class="btn-more">Read more</a>
			</li>
			<li class="purple" style="background-image: url(images/01.jpg)">
				<h3>She will say “yes”</h3>
				<h2>engagement ring</h2>
				<a href="#" class="btn-more">Read more</a>
			</li>
			<li class="yellow" style="background-image: url(images/02.jpg)">
				<h3>You deserve to be beauty</h3>
				<h2>golden bracelets</h2>
				<a href="#" class="btn-more">Read more</a>
			</li>
		</ul>
	</div>


	<!-- BODY -->

	<div id="body">
		<div class="container">
			<div class="last-products">
				<h2>Last added products</h2>
				<section class="products">
					<article>
						<img src="images/1.jpg" alt="">
						<h3>Designer ring</h3>
						<h4>$15.00</h4>
						<a href="cart.php" class="btn-add">Add to cart</a>
					</article>
					<article>
						<img src="images/11.jpg" alt="">
						<h3>Necklace</h3>
						<h4>$109.00</h4>
						<a href="cart.php" class="btn-add">Add to cart</a>
					</article>
					<article>
						<img src="images/12.jpg" alt="">
						<h3>Bracelets</h3>
						<h4>$79.00</h4>
						<a href="cart.php" class="btn-add">Add to cart</a>
					</article>
					<article>
						<img src="images/13.jpg" alt="">
						<h3>Lightweight Pasa Set</h3>
						<h4>$39.00</h4>
						<a href="cart.php" class="btn-add">Add to cart</a>
					</article>
					<article>
						<img src="images/14.jpg" alt="">
						<h3>Earring</h3>
						<h4>$29.00</h4>
						<a href="cart.php" class="btn-add">Add to cart</a>
					</article>
				</section>
			</div>
			<section class="quick-links">
				<article style="background-image: url(images/2.jpg)">
					<a href="#" class="table">
						<div class="cell">
							<div class="text">
								<h4>Buy one </h4>
								<hr>
								<h3>Get the other pair free</h3>
							</div>
						</div>
					</a>
				</article>
				<article class="red" style="background-image: url(images/3.jpg)">
					<a href="#" class="table">
						<div class="cell">
							<div class="text">
								<h4>Hurry up!!!</h4>
								<hr>
								<h3>Half price</h3>
								<hr>
								<p>offer ends on 20th May</p>
							</div>
						</div>
					</a>
				</article>
				<article style="background-image: url(images/4.jpg)">
					<a href="#" class="table">
						<div class="cell">
							<div class="text">
								<h4>Refer Your friend</h4>
								<hr>
								<h3>Get 20% off on selected Items</h3>
							</div>
						</div>
					</a>
				</article>
			</section>
		</div>
		<!-- / container -->
	</div>

	<!-- / FOOTER -->

	<footer id="footer">
		<div class="container">
			<div class="cols">
				<div class="col">
				</div>
				<div class="col media">
					<h3>Social media</h3>
					<ul class="social">
						<li><a href="#"><span class="ico ico-fb"></span>Facebook</a></li>
						<li><a href="#"><span class="ico ico-tw"></span>Twitter</a></li>
						<li><a href="#"><span class="ico ico-gp"></span>Google+</a></li>
						<li><a href="#"><span class="ico ico-pi"></span>Tiktok</a></li>
					</ul>
				</div>
				<div class="col contact">
					<h3>Contact us</h3>
					<p>SagarArts INC.<br>Prospect Adelaide<br>South Australia</p>
					<p><span class="ico ico-em"></span><a href="#">anmolkhnija@outlook.com</a></p>
					<p><span class="ico ico-ph"></span>0490 372 545</p>
				</div>
				<div class="col newsletter">
					<h3>Give us a chance to improve ourself</h3>
					<p>we would love to hear from you. give us a review and help us to serve you better.</p>
					<form action="review.php" method="post">
						<input type="text" placeholder="Write your review here" name="review">
						<button type="submit" name ="submit"></button>
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
