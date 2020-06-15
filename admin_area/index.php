<?php
session_start();
include ("includes/db.php");

if(!isset($_SESSION['admin_email'])){
	echo "<script>window.open('login.php','_self')</script>";
}
else{
?>


<?php


$admin_session= $_SESSION['admin_email'];
$get_admin="select * from admins where admin_email='$admin_session'";
$run_admin=mysqli_query($con,$get_admin);
$row_admin=mysqli_fetch_array($run_admin);
$admin_id=$row_admin['admin_id'];
$admin_name=$row_admin['admin_name'];




$get_pro="select * from products";
$run_pro=mysqli_query($con,$get_pro);
$count_pro=mysqli_num_rows($run_pro);


$get_cust="select * from customers";
$run_cust=mysqli_query($con,$get_cust);
$count_cust=mysqli_num_rows($run_cust);


$get_p_cat="select * from product_categories";
$run_p_cat=mysqli_query($con,$get_p_cat);
$count_p_cat=mysqli_num_rows($run_p_cat);



$get_order="select * from customer_order";
$run_order=mysqli_query($con,$get_order);
$count_order=mysqli_num_rows($run_order);



?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<link rel="stylesheet" type="text/css" href="css/style.css">


	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>





<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<body>

	<div id="wrapper">
		<?php  include 'includes/sidebar.php'; ?>
		<div id="page-wrapper">
			<div class="container-fluid">

				<?php
				if(isset($_GET['dashboard']))
				{
					include 'dashboard.php';
				}
				?>
			</div>
		</div>
	</div>	



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- footer -->
	<?php
	include("includes/footer.php");
	?>

</body>
</html>

<?php } ?>