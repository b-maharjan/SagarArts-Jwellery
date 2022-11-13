<?php
include 'config.php';
session_start();

?>


<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Sagar Arts and jewelry</title>
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
				<li>Cart</li>
			</ul>
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

	<div id="body">
		<div class="container">
			<div id="content" class="full">
				<div class="cart-table">
					<table>
						<tr>
							<th class="items">Items</th>
							<th class="price">Price</th>
							<th class="qnt">Quantity</th>
							<th class="total">Total</th>
							<th class="delete"></th>
						</tr>
						<?php
	              $sql = "SELECT * FROM cart WHERE user_id = ".$_SESSION['id'].";";

	              $res = mysqli_query($conn, $sql);

								$total = 0;
	              if(mysqli_num_rows($res)>0){
	                   while($row= mysqli_fetch_array($res))
	                {

	          ?>
						<tr>
							<td class="items">
								<div class="image">
								<img src="./images/<?php echo $row["photo"]; ?></" alt="">
							</div>
							<a href="product.php?id=<?php echo $row['product_id'];?>" > <?php echo $row["name"]; ?>
							</td>
							<td class="price">$ <?php echo $row["product_price"]; ?></td>
							<td class="qnt"> <?php echo $row["product_quantity"]; ?></td>
							<td class="total">$ <?php echo number_format($row["product_quantity"] * $row["product_price"], 2);?></td>
							<td class="delete"><a onclick="return confirm('Are u sure?')"href="cart_delete.php?action=delete&id=<?php echo $row["cart_id"]; ?>"><span class="ico-del"></span></a></td>
						</tr>
						<?php
								$total = $total + ($row["product_quantity"] * $row["product_price"]);
								$shipments = 30;
								$final = $total + $shipments;
							}
						}

						?>

					</table>
				</div>

				<div class="total-count">
					<h4>Subtotal: <?php echo $total;?></h4>
					<p>+shippment: <?php echo $shipments;?></p>
					<h3>Total to pay: <strong><?php echo $total;?></strong></h3>
					<a href="#" class="btn-grey">Finalize and pay</a>
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
</body>
</html>
