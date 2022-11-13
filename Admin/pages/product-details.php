<?php include 'includes/connection.php';?>
<?php
    $sql= "SELECT * FROM `Product`";
    $res=mysqli_query($connection,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product details</title>
    <?php include 'includes/heading.php' ?>
<body>
<?php include 'includes/topnavbar.php' ?>
<?php include 'includes/sidebar.php' ?>
        <div class="contents p-4 dashboard">
            <div class="main-header">
                <h4 class="mb-3"></i>Product Details</h4>
            </div>
            <div class="form-content">
            <?php
                if(mysqli_num_rows($res)>0){ ?>
            <div class="row">
                <div class="col-md-12 animated bounceIn">
                    <table id="dataTables" class="table table-striped table-borderless"  width="100%">
                        <thead>
                            <tr>
                            <th class="th-sm">Id </th>
                                <th class="th-sm">Product Name</th>
                                <th class="th-sm">Product Price </th>
                                <th class="th-sm">Product Description </th>

                                <th class="th-sm">Product Availability</th>
                                <th class="th-sm">Category </th>

                                <th class="th-sm">Photo </th>
                                <th class="th-sm">Action </th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php while($row=mysqli_fetch_assoc($res)) {  ?>
                            <tr>
                            <td><?php echo $row["Product_ID"]; ?></td>
                                <td><?php echo $row["Product_Name"]; ?></td>
                                <td><?php echo $row["Product_Price"]; ?></td>
                                <td><?php echo $row["Product_Description"]; ?></td>
                                <td><?php echo $row["Product_Availability"]; ?></td>

                                <td><?php echo $row["Product_Category"]; ?></td>
                                <td style="width:150px">
                                    <div class="img-box">
                                        <img src=".../images/<?php echo $row["Product_Photo"]; ?>" class="img-fluid" alt="img">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                    <a href="product-edit.php?id=<?php echo $row['Product_ID']; ?>"><span class="circles c-edit"><img src="../assets/images/pencil-edit-button.png" alt="edit"></span></a>
                                    <a onclick="return confirm('Are u sure?')" href="product-delete.php?id=<?php echo $row['Product_ID']; ?>"><span class="circles c-trash ml-2"><img src="../assets/images/trash.png" alt="edit"></span></a>
                                    </div>

                                </td>
                            </tr>
                            <?php } }?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>


    <?php include 'includes/footer.php' ?>
