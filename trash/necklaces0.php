
<?php include 'config.php';?>

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

	<header id="header">
		<div class="container">
			<a href="index.php" id="logo" title="Sagar Arts">Sagar Arts</a>
			<div class="right-links">
				<ul>
					<li><a href="cart.php"><span class="ico-products"></span>Wish lis</a></li>
					<li><a href="SignIn.php"><span class="ico-signin"></span>Sign In</a></li>
					<li><a href="index.php"><span class="ico-signout"></span>Sign out</a></li>
				</ul>
			</div>
		</div>
		<!-- / container -->
	</header>
	<!-- / header -->

	<nav id="menu">
		<div class="container">
			<div class="trigger"></div>
			<ul>
				<li><a href="products.php">New collection</a></li>
				<li><a href="productss.php?n=ecklaces">Necklaces</a></li>
				<li><a href="productss.php?n=earrings">Earrings</a></li>
				<li><a href="productss.php?n=indi">Bindi</a></li>
				<li><a href="productss.php?n=hoes">Shoes</a></li>
				<li><a href="productss.php?n=set">Necklaces Set</a></li>

			</ul>
		</div>
		<!-- / container -->
	</nav>
	<!-- / navigation -->


	<div id="breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="#">Home</a></li>
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

          <?php
              $sql = "SELECT * FROM `product` WHERE Product_Category LIKE '%Necklaces';";

              $res = mysqli_query($conn,$sql);

              $check_necklaces = mysqli_num_rows($res)>0;

              if($check_necklaces)
              {
                while($row= mysqli_fetch_array($res))
                {

                  ?>

                  <section class="products">
        						<article>
											<div id="img-container">

											<a href="product.php?id=<?php echo $row['Product_ID']?>"><img id="featured" src="images/<?php echo $row["Product_Photo"]; ?>" alt="" height="180px" width="180px"></a>
											</div>
											<h2><a href="product.php?id=<?php echo $row['Product_ID']?>"><?php echo $row["Product_Name"]; ?></a></h2>
											<h4><a href="product.php?id=<?php echo $row['Product_ID']?>">$<?php echo $row["Product_Price"]; ?></a></h4>
											<a href="cart.php" class="btn-add">Add to cart</a>
                    </article>

                  <?php
                }
              }
              else{
                echo "There is no Necklaces available";
                }
          ?>

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
