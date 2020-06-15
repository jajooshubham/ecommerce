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

	<div id="top"><!-- top begin -->
		
		<div class="container"><!-- container begin -->
			
			<div class="col-md-6 offer"><!-- col-md-6 offer begin -->
				
				<a href="" class="btn btn-success btn-sm">Welcome Guest</a>
				<a href="checkout.php">Shopping Cart Total Price: $300, Total Items: 2</a>

			</div><!-- col-md-6 offer end -->

			<div class="col-md-6"><!-- col-md-6 begin -->

				<ul class="menu"><!-- top menu begin -->
					
					<li>
						<a href="customer_registration.php">Register</a>
					</li>
					<li>
						<a href="customer/my_account.php">My Account</a>
					</li>
					<li>
						<a href="cart.php">Go To Cart</a>
					</li>
					<li>
						<a href="checkout.php">Login</a>
					</li>

				</ul><!-- top menu end -->

			</div><!-- col-md-6 end -->

		</div><!-- container end -->

	</div><!-- top end -->

	<div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default begin -->
		
		<div class="container"><!-- container begins -->
			
			<div class="navbar-header"><!-- navbar-header begin -->
			
				<a href="index.php" class="navbar-brand home"><!-- navbar-brand home begins -->
					
					<img src="images/ecom-store-logo.png" alt="sec2hand-logo" class="hidden-xs">
					<img src="images/ecom-store-logo-mobile.png" alt="sec2hand-logo" class="visible-xs">

				</a><!-- navbar-brand home end -->

				<button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
					
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-align-justify"></i>

				</button>

				<button class="navbar-toggle" data-toggle="collapse" data-target="#search">
					
					<span class="sr-only">Toggle Search</span>
					<i class="fa fa-search"></i>

				</button>

			</div><!-- navbar-header end -->

			<div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse begins -->
				
				<div class="padding-nav"><!-- padding-nav begin -->
					
					<ul class="nav navbar-nav left ">
						
						<li class="active">
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="shop.php">Shop</a>
						</li>
						<li>
							<a href="customer/my_account.php">My Account</a>
						</li>
						<li>
							<a href="cart.php">Shopping Cart</a>
						</li>
						<li>
							<a href="#">About Us</a>
						</li>
						<li>
							<a href="#">Services</a>
						</li>
						<li>
							<a href="contact.php">Contact Us</a>
						</li>

					</ul>

				</div><!-- padding-nav end -->

				<a href="" class="btn navbar-btn btn-primary right   ">
					
					<span>4 items in cart</span>
					<i class="fa fa-shopping-cart"></i>

				</a>
				<div class="navbar-collapse collapse right">
					
					<button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">

						<span class="sr-only">Toggle Search</span>
						<i class="fa fa-search"></i>

					</button>

				</div>

				<div class="collapse clearfix" id="search">
					
					<form method="get" action="results.php" class="navbar-form">
						
						<div class="input-group">
							
							<input type="text" name="user_query" class="form-control" placeholder="search" required="">

							<span class="input-group-btn">
							<button type="submit" class="btn btn-primary" value="search" name="search">
								<i class="fa fa-search"></i>
							</button>
							</span>

						</div>

					</form>

				</div>

			</div><!-- navbar-collapse collapse end -->

		</div><!-- container end -->

	</div><!-- navbar navbar-default end -->

	<div class="container" id="section">
		
		<div class="col-md-12">
			
			<div class="carousel slide" id="myCarousel" data-ride="carousel">
				
				<ol class="carousel-indicators">
					
					<li data-target="myCarousel" data-slide-to="0" class="action"></li>
					<li data-target="myCarousel" data-slide-to="1"></li>
					<li data-target="myCarousel" data-slide-to="2"></li>
					<li data-target="myCarousel" data-slide-to="3"></li>

				</ol>

				<div class="carousel-inner">
					
					<?php
						$get_slider="select * from slider LIMIT 0,1";
						$run_slider=mysqli_query($con,$get_slider);
						while($row=mysqli_fetch_array($run_slider)){
							$slider_name=$row['slider_name'];
							$slider_image=$row['slider_image'];
							echo "<div class = 'item active'>
								<img src='admin_area/slider_images/$slider_image'>
							</div>";
						}
					?>
					
					<?php
						$get_slider="select * from slider LIMIT 1,3";
						$run_slider=mysqli_query($con,$get_slider);
						while($row=mysqli_fetch_array($run_slider)){
							$slider_name=$row['slider_name'];
							$slider_image=$row['slider_image'];
							echo "<div class = 'item '>
								<img src='admin_area/slider_images/$slider_image'>
							</div>";
						}
					?>





				</div><!--carousel-inner End-->

				<a href="#myCarousel" class="left carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a href="#myCarousel" class="right carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>

			</div>

		</div>

	</div>

	<div id="advantage">
		
		<div class="container">
			<div class="same-height-row">
				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="">BEST PRICES</a></h3>
						<p>you can check on all other sites about the prices and then compare with us.</p>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="">100% SATISFACTION GURANTEED FROM US</a></h3>
						<p>Free returns on everything for 3 months</p>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="">WE LOVE OUR CUSTOMERS</a></h3>
						<p>We are known to provide best possible service ever</p>
					</div>
				</div>

			</div>
		</div>
	</div>


	<div id="hot">
		<div class="box">
			<div class="container">
				<div class="col-md-12">
					<h2>LATEST THIS WEEK</h2>
				</div>
			</div>
		</div>
	</div>


	<div class="container" id="content">
		<div class="row">
			<?php
			getpro(); 
			 ?>
		</div>
	</div>

	<!-- footer -->
	<?php
	include("includes/footer.php");
	?>

</body>
</html>