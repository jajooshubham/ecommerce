<?php
	include("includes/db.php");
	include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">

	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/npm.js"></script>

	<link rel="stylesheet" type="text/css" href="styles/style.css">

	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<title>E-Commerce Store | Sec2Hand</title>


</head>
<body>

	
<?php
	include("includes/header.php");
?>

<div>
			<?php
				if(isset($_GET['ecommerce']))
				{
					include ('home.php');
				}
			?>

			<?php
				if(isset($_GET['home']))
				{
					include ('home.php');
				}
			?>
			<?php
				if(isset($_GET['shop']))
				{
					include ('shop.php');
				}
			?>
			<?php
				if(isset($_GET['cart']))
				{
					include ('cart.php');
				}
			?>
			<?php
				if(isset($_GET['checkout']))
				{
					include ('checkout.php');
				}
			?>
			<?php
				if(isset($_GET['contact']))
				{
					include ('contact.php');
				}
			?>
			<?php
				if(isset($_GET['about']))
				{
					include ('about.php');
				}
			?>
			<?php
				if(isset($_GET['services']))
				{
					include ('services.php');
				}
			?>

			<?php
				if(isset($_GET['customer_registration']))
				{
					include ('customer_registration.php');
				}
			?>


			<?php
				if(isset($_GET['customer/my_account']))
				{
					include ('customer/my_account.php');
				}
			?>

			<?php
				if(isset($_GET['customer/my_account/my_order']))
				{
					include ('customer/my_order.php');
				}
			?>
			<?php
				if(isset($_GET['customer/my_account/pay_offline']))
				{
					include ('customer/pay_offline.php');
				}
			?>
			<?php
				if(isset($_GET['customer/my_account/edit_account']))
				{
					include ('customer/my_order.php');
				}
			?>
			<?php
				if(isset($_GET['customer/my_account/delete_account']))
				{
					include ('customer/delete_account.php');
				}
			?>
			<?php
				if(isset($_GET['customer/my_account/change_password']))
				{
					include ('customer/change_password.php');
				}
			?>

</div>

<?php
	include("home.php");
?>
<!-- footer -->
<?php
	include("includes/footer.php");
?>

</body>
</html>