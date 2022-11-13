<?php
include 'config.php';
session_start();
if (isset($_POST['submit'])) {
 $review= $_POST['review'];
$id = $_SESSION['id'];

		$sql = "INSERT into review (Review, User_Id) values ('$review', '$id')";
		$result = mysqli_query($conn, $sql);

}

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Sagar Arts & Jewellery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/44f557ccce.js"></script>

</head>
<body>
	<!-- HEADER -->
	<?php include 'includes/topnav.php'; ?>

	<!-- NAVBAR -->
	<?php include 'includes/navbar.php'; ?>


<div class="rev-section">

<h2 class="title">Our Guests Love Us</h2>
<p class="note">Give us a chance to improve ourself through your REVIEW.</p>

<div class="reviews">

<div class="review">

   <div class="body-review">
      <div class="name-review">Nathan D.</div>
      <div class="place-review">Prospect</div>
      <div class="rating">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half"></i>
      </div>
      <div class="desc-review">Quick responce and really satisfied with serviece.</div>
   </div>
</div>
<div class="review">

   <div class="body-review">
      <div class="name-review">Mary Will</div>
      <div class="place-review">North Adelaide</div>
      <div class="rating">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <div class="desc-review">Quality products, Really reflectiing the indian culture.</div>
   </div>
</div>
<div class="review">

   <div class="body-review">
      <div class="name-review">Kevin Tuck</div>
      <div class="place-review">Ascot Park</div>
      <div class="rating">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half"></i>
      </div>
      <div class="desc-review">I found the perfect jwellery set for my weeding. The owner was really friendly and helpful.</div>
   </div>
</div>

</div>

</div>

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
					<input type="text" placeholder="Write your review here">
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
