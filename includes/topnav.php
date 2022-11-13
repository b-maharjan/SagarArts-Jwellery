<?php

  if(isset($_SESSION['username'])==false) {

?>

<header id="header">
		<div class="container">
    <img src="images/logo.png">
			<a href="index.php" id="logo" title="Sagar Arts & Jewellery">Sagar Arts & Jewellery</a>
			<div class="right-links">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="register.php"></span>Register</a></li>
					<li><a href="login.php"></span>Login</a></li>
				</ul>
			</div>
	</header>



  <?php } else {
  $sql = "SELECT product_quantity FROM cart WHERE user_id = ".$_SESSION['id'].";";
  $res = mysqli_query($conn, $sql);
  $rows = mysqli_num_rows($res);
    ?>

    <header id="header">
		<div class="container">
    <a href="index.php">  <img src="images/logo.png"></a>
			<a href="index.php" id="logo" title="Sagar Arts & Jewellery">Sagar Arts & Jewellery</a>
			<div class="right-links">
				<ul>

        <li>  <a href="cart.php" class="notification">
        Wish List
        <div class="badge"><?php echo $rows;?></div>
      </a></li>
					<li><a href="logout.php">Sign out</a></li>
				</ul>
			</div>
	</header>


  <?php } ?>
