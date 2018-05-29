<?php 
include('config.php'); 
$username = $password = ""; 
$username_err = $password_err = ""; 
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    if(empty(trim($_POST["username"]))){ 
        $username_err = 'Please enter username.'; 
    } else{ 
        $username = trim($_POST["username"]); 
    } 
    if(empty(trim($_POST['password']))){ 
        $password_err = 'Please enter your password.'; 
    } else{ 
        $password = trim($_POST['password']); 
    } 
    if(empty($username_err) && empty($password_err)){ 
        $sql = "SELECT name, password FROM users WHERE name = ?"; 
        if($stmt = mysqli_prepare($db, $sql)){ 
            mysqli_stmt_bind_param($stmt, "s", $param_username); 
            $param_username = $username; 
            if(mysqli_stmt_execute($stmt)){ 
                mysqli_stmt_store_result($stmt); 
                if(mysqli_stmt_num_rows($stmt) == 1){ 
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password); 
                    if(mysqli_stmt_fetch($stmt)){ 
                        if(password_verify($password, $hashed_password)){ 
                            session_start(); 
                            $_SESSION['username'] = $username; 
                            header("location: dashboard.php"); 
                        } else{ 
                            $password_err = 'The password you entered was not valid.'; 
                        } 
                    } 
                } else{ 
                    $username_err = 'No account found with that username.'; 
                } 
            } else{ 
                echo "Oops! Something went wrong. Please try again later."; 
            } 
            mysqli_stmt_close($stmt); 
            mysqli_close($db); 
        } else{ 
            die(mysqli_error($db)); 
        } 
    } 
} 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Login</title> 
    <link rel="stylesheet" type="text/css" href="css/login.css">
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css"> 
        body{ font: 14px sans-serif; } 
        .wrapper{ width: 350px; padding: 20px; } 
    </style> 
</head> 
<body> 

<div class="container" id="gbr">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/bg1.png" alt="bg1" style="width:100%;height: 100%">
      </div>
      <div class="item">
        <img src="img/bg2.png" alt="bg2" style="width:100%; height: 100%">
      </div>
      <div class="item">
        <img src="img/bg3.png" alt="bg3" style="width:100%; height: 100%">
      </div>  
    </div>
  </div>
  </div>

<!-- <img src="img/bg1.png" id="gbr"> -->

<div class="wrapper">
	<div class="lgn">
    <div id="inside" >
    	<img src="img/logo.png" height="180" width="220">
    	<br>
    	<h2 style="color: white"><center><strong>Login</strong></center></h2> 
 
    	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>"> 
            <label style="color: white">Username</label> 
            <input type="text" name="username"class="form-control" value="<?php echo $username; ?>"> 
            <span class="help-block"><?php echo $username_err; ?></span> 
        </div> 
        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>"> 
            <label style="color: white">Password</label> 
            <input type="password" name="password" class="form-control"> 
            <span class="help-block"><?php echo $password_err; ?></span> 
        </div> 
        <div class="form-group"> 
            <input type="submit" class="btn btn-primary" value="Login" id="sub"> 
        </div> 
    </form> 
    </div>
    
	</div>
    
</div> 
</body> 
</html> 
