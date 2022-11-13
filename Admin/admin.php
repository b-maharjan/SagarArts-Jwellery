<?php include 'pages/includes/connection.php';



$query = $connection->query("SELECT * FROM `users` ORDER BY `users`.`id` ASC");


$countUser = $query->num_rows;

$query = $connection->query("SELECT * FROM `product` ORDER BY `product`.`Product_ID` ASC");

$countProduct = $query->num_rows;

$query = $connection->query("SELECT * FROM `review` ORDER BY `review`.`Review_ID` ASC");


$countReview = $query->num_rows;






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

<body>
  <?php include 'pages/includes/heading.php'; ?>
  <div class="dashboard__wrapper">
          <div class="dashboard__header">
              <div class="dashboard__logo">
                  <h5>Admin Panel</h5>
              </div>
              <div class="dashboard__header-contents">
              <nav class="navbar navbar-expand navbar-dark static-top" >
                  <div class="dashboard__name">
                      <h5>Product Management System</h5>
                  </div>
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item dropdown no-arrow">
                          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-user-circle fa-fw"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                          <a class="dropdown-item" href="../../logout.php"  data-target="#logoutModal">Logout</a>

                          </div>
                      </li>
                  </ul>
              </nav>

              </div>
          </div>


<div class="dashboard__sidebar">
            <div class="dashboard__sidebar-inner">
                <div class="sidebar__inner-contents">
                    <div class="accordion main__accordion" id="accordionExample">
                        <div class="card card-navbar">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <a class="btn btn-block btn-link" href="../admin.php" >
                                        <i class="fas fa-home"></i><span> Home</span>
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <div class="card card-navbar">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-block btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fas fa-fw fa"></i> <span>Product</span>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <a href="pages/add-product.php" class="d-block">Add Product</a>
                                    <a href="pages/product-details.php" class="d-block">Product Details</a>
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
                <div class="sidebar__footer">
                    <button class="btn btn-block" id="sidedar__collapse-btn"><i class="fas fa-arrows-alt-h"></i><span class="btn-txt">Collapse</span></button>
                </div>
            </div>
          </div>
        <div class="contents p-4">
            <div class="main-header">
                <h3 class="mb-2"><b>Welcome</b> to Dashboard !!!</h3>
            </div>
            <div class="total-users-box">
                <div class="row">
                    <div class="col-sm-6">
                    <div class="imge">'
                            <img src="assets/images/Map-light.jpeg" alt="users" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="information">
                            <h1>Hello, Admin !</h1>
                            <p>Recently, Many users have SIGNUP in Sagar Arts and Jewellery...so here is


                            </p>

                            <h2><i class="fas fa-user-secret mr-3"></i>Total New Users: <?php echo $countUser; ?> </h2>
                            <div class="d-flex added">


                            </div>
                        </div>
                    </div>
                </div>

            </div>
            .  <div class="box-item">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="pages/driver-details.php">
                                <div class="item-menu">
                                    <div class="row w-100 h-100">
                                        <div class="col-sm-4 w-100">
                                        <div class="icons">
                                        <i class="fas fa-fw fa-users"></i>
                                        </div>
                                        </div>
                                        <div class="col-sm-4 w-100">
                                            <div class="detail">
                                                <p>Total User</p>
                                                <h2> <?php echo $countUser; ?></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="pages/bus-details.php">
                                <div class="item-menu bg-1">
                                    <div class="row w-100 h-100">
                                        <div class="col-sm-4 w-100">
                                            <div class="icons">
                                                <i class="fas fa-fw fa-product"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 w-100">
                                            <div class="detail">
                                                <p>Total Product</p>
                                                <h2> <?php echo $countProduct?></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="pages/route-details.php">
                                <div class="item-menu bg-2">
                                    <div class="row w-100 h-100">
                                        <div class="col-sm-4 w-100">
                                            <div class="icons">
                                            <i class="fas fa-fw fa-review"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 w-100">
                                            <div class="detail">
                                                <p>Total Review</p>
                                                <h2> <?php echo $countReview?></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                </div>


        </div>
    </div>
