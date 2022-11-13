<?php include 'includes/connection.php';?>

<?php
if(isset($_POST['updatebtn'])){
$productid= $_POST['id'];
$productname= $_POST['productname'];
$productprice= $_POST['productprice'];
$productcategory= $_POST['productcategory'];
$productdescription=$_POST['productdescription'];
$productavailability=$_POST['productavailability'];
$photo= $_FILES['file']['name'];

	//image Upload

   move_uploaded_file($_FILES['file']['tmp_name'],"C:\\xampp\\htdocs\\Route-Management\\test\\uploads\\".$_FILES['file']['name']);
	$res=false;
	$update="UPDATE `product` SET Product_Name='$productname', Product_Price='$productprice', Product_Category='$productcategory', Product_Description='$productdescription', Product_Photo='$photo', Product_Availability='$productavailability' WHERE Product_ID='$productid' ";
	$res= mysqli_query($connection,$update);

	if($res==true){
		$_SESSION['success']="Data is updated";

		header('Location: product-details.php');
	}
	else{
		die('Unsucessfull' .mysqli_error($connection));

	}

}   ?>
