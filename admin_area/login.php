<?php
session_start()
include ("includes/db.php");
?>

<!DOCTYPE HTML>
<html>

<head>
	
	<title>Admin Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/npm.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>

<div class="container"><!--container Starts -->

<form class="form-login" action="" method="post"><!--form-login Starts -->

<h2 class="form-login-heading">Admin Login</h2>

<input type="text" class="form-control" name="admin_email" placeholder="Email Address" required="">

<input type="password" class="form-control" name="admin_pass" placeholder="Password" required="">

<button class="btn btn-lg btn-primary btn-block" type="submit" name="admin_login">

Log In

</button>

<h4 class="forget-password">

<a href=forget_password.php"> Lost Your Password? Forget Password</a>

</h4>

</form><!--form-login Ends -->

</div><!-- container Ends -->


</body>

</html>

<?php
if(isset($_POST['admin_login']))
{
	$admin_email=mysql_real_escape_string($con, $_POST['admin_email']);
	$admin_pass=mysql_real_escape_string($con, $_POST['admin_pass']);
	$get_admin="select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";
	$run_admin=mysqli_query($con,$get_admin);
	$count=mysqli_num_row($run_admin);
	if($count==1)
	{
		$_SESSION['admin_email']=$_admin_email;
		echo "<script>alert('You are logged in')</script>";
		echo "<script>window.open('index.php?dashboard','_self')</script>";
	}
	else
	{
		echo "<script>alert('Email / Password Wrong')</script>";"
	}
}
?>
