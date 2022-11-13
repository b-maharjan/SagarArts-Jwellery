<?php include 'includes/connection.php';?>
<?php

  $sql='SELECT *  FROM product WHERE Product_ID='.$_GET['id'];
   $result=mysqli_query($connection,$sql);
   if(mysqli_query($connection,$sql)){
    while($row = mysqli_fetch_array($result))
    {
        $productid= $row['Product_ID'];
      $productname= $row['Product_Name'];
      $productprice= $row['Product_Price'];
      //$brand=$row['brand'];
      //$veh_color=$row['veh_color'];
    //  $veh_regdate= $row['veh_regdate'];
      $productcategory= $row['Product_Category'];
      $productdescription=$row['Product_Description'];
      $productavailability=$row['Product_Availability'];
      $photo= $row['Product_Photo'];

    }


            }else{
        echo "Not Edited";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <?php include 'includes/heading.php' ?>
<body>
<?php include 'includes/topnavbar.php' ?>
<?php include 'includes/sidebar.php' ?>
        <div class="contents p-4 dashboard">
            <div class="main-header">
                <h4 class="mb-3"><i class="fas fa-edit mr-4"></i>Edit Product Details</h4>
            </div>
            <div class="form-content">
            <div class="back-table">
                    <a href="product-details.php"><i class="fas fa-hand-point-left mr-2"></i>Tables</a>
                </div>
            <div class="row edit-form">
                <div class="col-md-12 animated bounceIn">
                    <form class="form-horizontal" action="product-editprocess.php" method="post" enctype="multipart/form-data">
                        <div class="d-flex">
                        <input id="productid" type="hidden" name="id" value="<?php echo $productid; ?>" >
                            <div class="form-group">
                                <span class="input-group-addon"><b>Product Name</b></span>
                                <input id="productname" type="text" class="form-control" name="productname" placeholder="Type product name" value="<?php echo $productname; ?>">
                            </div>
                            <div class="form-group ml-4">
                                <span class="input-group-addon"><b>Product Price</b></span>
                                <input id="productprice" type="number" class="form-control" name="productprice" placeholder="any" value="<?php echo $productprice; ?>">
                            </div>
                        </div>

                      <div class="d-flex">
                        <div class="form-group">
                            <span class="input-group-addon"><b>Description</b></span>
                            <textarea rows="5" id="Description" type="text" class="form-control" name="productdescription" placeholder="write description">
                                <?php echo $productdescription; ?>
                            </textarea>
                        </div>
                        <div class="form-group ml-4">
                            <span class="input-group-addon"><b>Available</b></span>
                            <select name="productavailability" id="productavailability" class="form-control">
                                <option enabled selected value="<?php echo $productavailability; ?>" hidden>
                                    <?php if($productavailability="In stock"){?>
                                        In Stock
                                        <?php } else{ ?>
                                                Out of Stock
                                        <?php } ?>
                                </option>
                                <option  disabled value="">Choose ...</option>
                                <option value="In Stock">In Stock</option>
                                <option value="Out of Stock">Out of Stock</option>
                            </select>
                                        </div>
                      </div>

                    <div class="d-flex">
                      <div class="form-group">
                                <span class="input-group-addon"><b>Photo</b></span>
                                <input  type="file" class="form-control file" name="file" value="file">
                                <div class="img-box">
                                    <img  src="/images/<?php echo $photo; ?>" class="img-fluid" >
                                </div>
                            </div>
                            <div class="form-group ml-4">
                                <span class="input-group-addon"><b>Category</b></span>
                                <select name="productcategory" id="productcategory" class="form-control">
                                    <option enabled selected value="<?php echo $productcategory; ?>" hidden>
                                        <?php if($productcategory="necklaces"){?>
                                            Necklaces
                                          <?php } elseif($productcategory="Earrings"){ ?>
                                                  Earrings
                                            <?php } elseif($productcategory="Shoes"){ ?>
                                                    Shoes
                                            <?php } elseif($productcategory="Bindi"){ ?>
                                                          Bindi
                                              <?php } elseif($productcategory="Necklaces Set"){ ?>
                                                                Necklaces Set
                                                <?php } ?>
                                    </option>
                                    <option  disabled value="">Choose ...</option>
                                    <option value="necklaces">Necklaces</option>
                                    <option value="Earrings">Earrings</option>
                                    <option value="Shoes">Shoes</option>
                                    <option value="Bindi">Bindi</option>
                                    <option value="Necklaces Set">Necklaces Set</option>
                                </select>
                                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="updatebtn" class="btn btn-success"><i class="fas fa-pencil-alt mr-2"></i>Update</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>

        </div>
    </div>
    <?php include 'includes/footer.php' ?>
