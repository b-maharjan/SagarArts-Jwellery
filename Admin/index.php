<?php include 'includes/connection.php';?>
<?php 
    
    $msg="";
    if(isset($_POST['submit'])){
        $username=mysqli_real_escape_string($connection,strtolower($_POST['username']));
        
        $password=mysqli_real_escape_string($connection,$_POST['password']); 
        
        $login_query="SELECT * FROM `admin` WHERE username='$username' and password='$password'";
        
        $login_res=mysqli_query($connection,$login_query);
        if(mysqli_num_rows($login_res)>0){ 
            $_SESSION['username']=$username;
            header('Location:admin.php');
        } 
        else{
             $msg= '<div class="alert alert-danger alert-dismissable" style="margin-top:30px";>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Unsuccessful!</strong> Login Unsuccessful.
                  </div>';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title> 
    <?php include 'includes/header.php';?>
</head>
<body> 
<div class="login-wrapper">
    <div class="container"> 
     <div class="row">
        <div class="col-md-6"> 
        <div class="form-box-login">
         
            <div class="page-header">
                <h3 style="text-align: center;">Admin Login</h3>      
          </div> 
          <?php echo $msg; ?>
            <form class="form-horizontal animated bounce" action="" method="post"> 
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="username" type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <br> 
                
                <div class="input-group btnsg">
                  <button type="submit" name="submit" class="btn btn-success">Log in</button>
                  
                </div>

              </form>   
        </div> 
      </div>
     </div>
         
   
    </div> 
    
   </div>
    
</body>
</html>