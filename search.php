<?php
include 'config.php';
session_start();
    $search = $_GET['search'];
    $sql= "SELECT * FROM `Product`WHERE Product_Name LIKE '%$search%' OR Product_Category LIKE '%$search%' OR Product_Price LIKE '%$search%'";
    $res=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>

  	<link rel="stylesheet" media="all" href="css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" herf="Admin/assets/css/bootsrap/bootstrap.css">
</head>
<body>
  <?php include 'includes/topnav.php'; ?>

<!-- NAVBAR -->
<?php include 'includes/navbar.php'; ?>
        <div class="contents p-4 dashboard">
            <div class="main-header">
                <h4 style="padding:10px;margin-left: 50px;"></i>Product Search result</h4>
            </div>
            <div class="form-content">
            <?php

                if(mysqli_num_rows($res)>0){ ?>
            <div class="row">
                <div class="col-md-12 animated bounceIn">
                    <table id="dataTables" class="table table-striped table-border" style="margin-left: 50px; padding:10px;">
                        <thead>
                            <tr>
                              <th style="width:5%" class="th-sm">Id </th>
                              <th style="width:20%" class="th-sm">Product Photo </th>

                                <th style="width:10%" class="th-sm">Product Name</th>
                                <th style="width:10%" class="th-sm">Product Price </th>
                                <th style="width:32%" class="th-sm">Product Description </th>

                                <th style="width:13%"class="th-sm">Product Availability</th>
                                <th style="width:10%" class="th-sm">Category </th>



                            </tr>
                        </thead>

                        <tbody>
                        <?php while($row=mysqli_fetch_assoc($res)) {  ?>
                            <tr>
                            <td><?php echo $row["Product_ID"];?></td>
                            <td style="width:150px">
                                <div class="img-box">
                                    <img src="images/<?php echo $row["Product_Photo"]; ?>" class="img-fluid" alt="img" style="height:80px; width:90px;padding:5px;" >
                                </div>
                            </td>
                                <td><?php echo $row["Product_Name"]; ?></td>
                                <td><?php echo $row["Product_Price"]; ?></td>
                                <td><?php echo $row["Product_Description"]; ?></td>
                                <td><?php echo $row["Product_Availability"]; ?></td>

                                <td><?php echo $row["Product_Category"]; ?></td>


                            </tr>
                            <?php } }?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
