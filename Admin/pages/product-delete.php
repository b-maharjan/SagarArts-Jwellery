<?php
   include 'includes/connection.php';
   $productid= $_GET['id'];


   $sql="DELETE FROM Product WHERE Product_ID='$productid';";
   $result=mysqli_query($connection, $sql);
   if($result){
       header("Location: product-details.php");
   }else{
         echo "Not deleted";
   }

?>
