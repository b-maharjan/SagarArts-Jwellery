<?php
   include 'config.php';
   $productid= $_GET['id'];


   $sql="DELETE FROM cart WHERE cart_id='$productid';";
   $result=mysqli_query($conn, $sql);
   if($result){
       header("Location: cart.php");
   }else{
         echo "Not deleted";
   }

?>
