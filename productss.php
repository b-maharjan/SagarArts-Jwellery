
<?php include 'config.php';
session_start();
$item = $_GET['n'];

    if (isset($_POST['submit'])) {
      $photo= $_POST['hidden_photo'];
			$name= $_POST['hidden_name'];
			$userID =  $_SESSION['id'];
	    $quantity = $_POST['quantity'];
	    $price = $_POST['hidden_price'];
      $productID = $_GET['id'];


     $sql= "SELECT * FROM cart WHERE product_id = ".$productID.";";
		 $result = mysqli_query($conn, $sql);
		 if(mysqli_num_rows($res)>0)
		 {
			 $quantity = $quantity + 1;
			 $sql= " UPDATE cart INTO product_quantity = '$quantity' WHERE product_id = ".$productID.";";


			 $result = mysqli_query($conn, $sql);
		 }else{

	    $sql1 = "INSERT INTO cart (user_id, product_id, product_quantity, product_price, name, photo)
			VALUES ('$userID', '$productID', '$quantity', '$price', '$name', '$photo')";

	    $res = mysqli_query($conn, $sql1);
		}
		}


?>

<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Sagar Arts </title>
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
              $sql = "SELECT * FROM `product` WHERE Product_Category LIKE '%$item';";

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
											<form action="test.php?n=<?php echo $item;?>&id=<?php echo $row['Product_ID'];?>" method="post">
												<input type="text" name="quantity" value="1" class="form-control" />
												<input type="hidden" name="hidden_photo" value="<?php echo $row["Product_Photo"]; ?>" />


												<input type="hidden" name="hidden_name" value="<?php echo $row["Product_Name"]; ?>" />

												<input type="hidden" name="hidden_price" value="<?php echo $row["Product_Price"]; ?>" />
												<button type="submit" name="submit"><i class="btn-add">Add to cart</i></button>
											</form>
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
