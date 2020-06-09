<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/npm.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<title>E-Commerce Store | Sec2Hand</title>
</head>
<body>

	<div id="wrapper">
		<?php  include 'includes/sidebar.php'; ?>
		<div class="page-wrapper">
			<div class="container-fluid">
				<?php
				if(isset($_GET[dashboard]))
				{
					include 'dashboard.php';
				}
				?>
			</div>
		</div>
	</div>	



<!-- footer -->
	<?php
	include("includes/footer.php");
	?>

</body>
</html>