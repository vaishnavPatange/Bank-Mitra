<?php  
session_start();//session starts here  
  
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login &amp; CSS &amp; JavaScript</title>
  <link rel="stylesheet" href="../css/style-login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="../img/wave.png">
	<div class="container">
		<div class="img">
			<img src="../img/bg.svg">
		</div>
		<div class="login-content">
			<form action="login-page.php" method="post">
				<img src="../img/avatar.svg">
				<h2 class="title">Admin</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login" name="Login">
            </form>
        </div>
    </div>
    
</body>
</html>
<!-- partial -->
  <script  src="../script/script-login.js"></script>

</body>
</html>


<?php  
  
include("Connection.php");  
  
if(isset($_POST['Login']))  
{  
    $user_name=$_POST['username'];  
    $user_pass=$_POST['password'];  
  
    $check_user="select * from adminlogin WHERE username='$user_name'AND password='$user_pass'";  
  
    $run=mysqli_query($con,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('admin-index.php','_self')</script>";  
  
        $_SESSION['username'] = $user_name;//here session is used and value of $user_name store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>  