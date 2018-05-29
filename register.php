<?php 
include('config.php'); 
$username = $password = $confirm_password = ""; 
$username_err = $password_err = $confirm_password_err = ""; 
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    if(empty(trim($_POST["username"]))){ 
        $username_err = "Please enter a username."; 
    } else{ 
        $sql = "SELECT id FROM users WHERE name = ?"; 
        if($stmt = mysqli_prepare($db, $sql)){ 
            mysqli_stmt_bind_param($stmt, "s", $param_username); 
            $param_username = trim($_POST["username"]); 
            if(mysqli_stmt_execute($stmt)){ 
                mysqli_stmt_store_result($stmt); 
                if(mysqli_stmt_num_rows($stmt) == 1){ 
                    $username_err = "This username is already taken."; 
                } else{ 
                    $username = trim($_POST["username"]); 
                } 
            } else{ 
                echo "Oops! Something went wrong. Please try again later."; 
            } 
        } 
        mysqli_stmt_close($stmt); 
    } 
    if(empty(trim($_POST['password']))){ 
        $password_err = "Please enter a password."; 
    } elseif(strlen(trim($_POST['password'])) < 8){ 
        $password_err = "Password must have atleast 8 characters."; 
    } else{ 
        $password = trim($_POST['password']); 
    } 
    if(empty(trim($_POST["confirm_password"]))){ 
        $confirm_password_err = 'Please confirm password.'; 
    } else{ 
        $confirm_password = trim($_POST['confirm_password']); 
        if($password != $confirm_password){ 
            $confirm_password_err = 'Password did not match.'; 
        } 
    } 
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){ 
        $sql = "INSERT INTO users (name, password, email) VALUES (?, ?, 'kosong')"; 
        if($stmt = mysqli_prepare($db, $sql)){ 
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password); 
            $param_username = $username; 
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash 
            if(mysqli_stmt_execute($stmt)){ 
                header("location: login.php"); 
            } else{ 
                echo "Something went wrong. Please try again later."; 
            } 
            mysqli_stmt_close($stmt); 
        } else{ 
            die(mysqli_error($db)); 
        } 
    } 
    mysqli_close($db); 
} 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <meta charset="UTF-8"> 
    <title>Sign Up</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> 
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
	<div class="reg">
		<div id="inside">
	    	<img src="img/logo.png" height="180" width="220">
			<h2 style="color: white"><center>Sign Up</center></h2> 
    		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
        	<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>"> 
            	<label style="color: white">Username</label> 
            	<input type="text" name="username"class="form-control" value="<?php echo $username; ?>"> 
            	<span class="help-block"><?php echo $username_err; ?></span> 
       	 	</div> 
       	 	<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>"> 
            	<label style="color: white">Password</label> 
            	<input type="password" name="password" class="form-control" value="<?php echo $password; ?>"> 
            	<span class="help-block"><?php echo $password_err; ?></span> 
        	</div> 
        	<div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>"> 
            	<label style="color: white" >Confirm Password</label> 
            	<input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>"> 
            	<span class="help-block"><?php echo $confirm_password_err; ?></span> 
       	 	</div> 
        	<div class="form-group"> 
            	<input style="float: left; background-color: #4b7bec" type="submit" class="btn btn-primary" value="Submit"> 
            	<input style="float: right; background-color: #ffb142; color: white" type="reset" class="btn btn-default" value="Reset"> 
        	</div> 
        	<br><br><br>
        	<p style="color: white">Already have an account? <a href="login.php" style="color: #4b6584">Login here</a>.</p> 
    		</form>	
		</div>
	
	</div>
     
</div> 
</body> 
</html>