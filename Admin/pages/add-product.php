<?php
    include 'includes/connection.php' ;

    $msg="";
    if(isset($_POST['submit'])){
        $productname= $_POST['productname'];
        $productprice= $_POST['productprice'];
        $productcategory= $_POST['productcategory'];
        $productdescription=$_POST['productdescription'];
        $productavailability=$_POST['productavailability'];
        $photo= $_FILES['file']['name'];

        //image Upload

        move_uploaded_file($_FILES['file']['tmp_name'],"C:\\xampp\\htdocs\\sagarr\\images\\".$_FILES['file']['name']);


        //move_uploaded_file($_FILES['file']['tmp_name'],"picture/".$_FILES['file']['name']);
        $res=false;
        $insert_query="INSERT INTO `product`(`Product_Name`, `Product_Price`,`Product_Description`, `Product_Availability`,`Product_Category`, `Product_Photo`) VALUES ('$productname','$productprice', '$productdescription', '$productavailability','$productcategory', '$photo');";
echo   $insert_query;
        $res= mysqli_query($connection, $insert_query);

        if($res==true){
      		$_SESSION['success']="Data is uploaded";

      		header('Location: product-details.php');
      	}
      	else{
      		die('Unsucessfull' .mysqli_error($connection));

      	}

    }

    //$msg="";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product </title>
    <?php include 'includes/heading.php' ?>
<body>
<?php include 'includes/topnavbar.php' ?>
<?php include 'includes/sidebar.php' ?>
        <div class="contents p-4 dashboard">
            <div class="main-header">
                <h4 class="mb-3"><i class="fas fa-fw  mr-4"></i>Add Product</h4>
            </div>
            <div class="form-content">
            <?php echo $msg; ?>
            <div class="row">
                <div class="col-md-12 animated bounceIn">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="d-flex">
                            <div class="form-group">
                                <span class="input-group-addon"><b>Product Name</b></span>
                                <input id="productname" type="text" class="form-control" name="productname" placeholder="Write name" required>
                            </div>
                            <div class="form-group ml-4">
                                <span class="input-group-addon"><b>Product Price</b></span>
                                <input id="productprice" type="number" class="form-control" name="productprice" required>
                            </div>
                        </div>

                        </div>
                        <div class="d-flex">
                        <div class="form-group ml-4">
                            <span class="input-group-addon"><b>Description</b></span>
                            <textarea rows="5" id="productdescription" type="text" class="form-control" name="productdescription" placeholder="add description"> </textarea>
                        </div>
                        <div class="form-group ml-4">
                                    <span class="input-group-addon"><b>Available</b></span>
                                    <select name="productavailability" id="productavailability" class="form-control">
                                            <option disabled selected >Choose...</option>
                                            <option value="In Stock">In Stock</option>
                                            <option value="Out of Stock">Out of Stock</option>
                                    </select>
                                </div>
                        </div>
                        <div class="d-flex">
                        <div class="form-group ml-4">
                            <span class="input-group-addon"><b>Photo</b></span>
                            <input  type="file" class="form-control file" name="file" required>
                        </div>
                        <div class="form-group ml-4">
                                    <span class="input-group-addon"><b>Category</b></span>
                                    <select name="productcategory" id="productcategory" class="form-control">
                                            <option disabled selected >Choose...</option>
                                            <option value="necklaces">Necklaces</option>
                                            <option value="Earrings">Earrings</option>
                                            <option value="Shoes">Shoes</option>
                                            <option value="Bindi">Bindi</option>
                                            <option value="Necklaces Set">Necklaces Set</option>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-danger"><i class="fas fa-save mr-2"></i> SAVE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    <?php include 'includes/footer.php' ?>
