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
						<a href="../customer_registration.php">Register</a>
					</li>
					<li>
						<a href="../my_account.php">My Account</a>
					</li>
					<li>
						<a href="../cart.php">Go To Cart</a>
					</li>
					<li>
						<a href="../checkout.php">Login</a>
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
						
						<li>
							<a href="../index.php">Home</a>
						</li>
						<li>
							<a href="../shop.php">Shop</a>
						</li>
						<li class="active">
							<a href="my_account.php">My Account</a>
						</li>
						<li>
							<a href="../cart.php">Shopping Cart</a>
						</li>
						<li>
							<a href="../cart.php">About Us</a>
						</li>
						<li>
							<a href="../cart.php">Services</a>
						</li>
						<li>
							<a href="../contact.php">Contact Us</a>
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

	<div id="content">
		<div class="container">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>My Account</li>
				</ul>
			</div>

			<div class="col-md-3">
				<?php
				include("includes/sidebar.php");
				?>
			</div>

			<div class="col-md-9">
				<div class="box">
					<h1 align="center">Please Confirm Your Payment</h1>
					<form action="confirm.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label>Invoice Number</label>
							<input type="text" name="invoice_number" required="" class="form-control">
						</div>

						<div class="form-group">
							<label>Amount</label>
							<input type="text" name="amount" required="" class="form-control">
						</div>

						<div class="form-group">
							<label>Select Payment Mode</label>
							<select class="form-control" name="payment_mode">
								<option>Net Banking</option>
								<option>UPI</option>
								<option>Cash On Delivery</option>
								<option>Debit Card/Credit Card</option>
							</select>
						</div>

						<div class="form-group">
							<label>Payment Date</label>
							<input type="date" name="date" required="" class="form-control">
						</div>

						<div class="form-group">
							<label>Transaction Number</label>
							<input type="text" name="trfr_number" required="" class="form-control">
						</div>

						<div class="text-center">
							<button class="btn btn-primary btn-lg" type="submit" name="confirm_payment">Confirm Payment</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

	<!-- footer -->
	<?php
	include("includes/footer.php");
	?>

</body>
</html>