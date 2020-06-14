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
						
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="shop.php">Shop</a>
						</li>
						<li>
							<a href="customer/my_account.php">My Account</a>
						</li>
						<li class="active">
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

	<div id="content">
		<div class="container">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Cart</li>
				</ul>
			</div>

			<div class="col-md-9" id="cart">
				<div class="box">
					<form action="cart.php" method="post" enctype="multioart-form-data">
						<h1>Shopping Cart</h1>
						<p class="text-muted">Currently you have 3 item(s) in cart</p>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th colspan="2">Product</th>
										<th>Quantity</th>
	 									<th>Unit Price</th>	
										<th>Size</th>
										<th colspan="1">Delete</th>
										<th colspan="1">Sub Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><img src="admin_area/product_images/bg_1.jpg"></td>
										<td>BENETTON White polo shirt</td>
										<td>2</td>
	 									<td>INR 299</td>	
										<td>Large</td>
										<td><input type="checkbox" name="remove[]"></td>
										<td>INR 999</td>
									</tr>
									<tr>
										<td><img src="admin_area/product_images/bg_1.jpg"></td>
										<td>BENETTON White polo shirt</td>
										<td>2</td>
	 									<td>INR 299</td>	
										<td>Large</td>
										<td><input type="checkbox" name="remove[]"></td>
										<td>INR 999</td>
									</tr>
									<tr>
										<td><img src="admin_area/product_images/bg_1.jpg"></td>
										<td>BENETTON White polo shirt</td>
										<td>2</td>
	 									<td>INR 299</td>	
										<td>Large</td>
										<td><input type="checkbox" name="remove[]"></td>
										<td>INR 999</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th colspan="5">Total</th>
										<th colspan="2">INR 1999</th>
									</tr>
								</tfoot>
							</table>
						</div>

						<div class="box-footer">
							<div class="pull-left">
								<a href="index.php" class="btn btn-default">
									<i class="fa fa-chevron-left"></i> Continue Shopping
								</a>
							</div>
							<div class="pull-right">
								<button class="btn btn-default" type="submit" name="update" value="update cart">
									<i class="fa fa-refresh"></i> Update Cart
								</button>
								<a href="checkout.php" class="btn btn-primary">
									Proceed To Checkout <i class="fa fa-chevron-right"></i>
								</a>
							</div>
						</div>
					</form>
				</div>

				<div id="row same-height-row">
					<div class="col-md-3 col-sm-6">
						<div class="box same-height headline">
							<h3 class="text-center">You Also Like These Products</h3>
						</div>
					</div>

					<div class="center-responsive col-md-3">
						<div class="product same-height">
							<a href="">
								<img src="admin_area/product_images/image_5.jpg" class="img-responsive">
							</a>
							<div class="text">
								<h3><a href="details.php">BENETTON White polo shirt</a></h3>
								<p class="price">INR 299</p>
							</div>
						</div>
					</div>

					<div class="center-responsive col-md-3">
						<div class="product same-height">
							<a href="">
								<img src="admin_area/product_images/image_5.jpg" class="img-responsive">
							</a>
							<div class="text">
								<h3><a href="details.php">BENETTON White polo shirt</a></h3>
								<p class="price">INR 299</p>
							</div>
						</div>
					</div>

					<div class="center-responsive col-md-3">
						<div class="product same-height">
							<a href="">
								<img src="admin_area/product_images/image_5.jpg" class="img-responsive">
							</a>
							<div class="text">
								<h3><a href="details.php">BENETTON White polo shirt</a></h3>
								<p class="price">INR 299</p>
							</div>
						</div>
					</div>
				</div>


			</div>

			<div class="col-md-3">
				<div class="box" id="order-summary">
					<div class="box-header">
						<h3>Order Summary</h3>
					</div>
					<p class="text-muted">
						Shipping and Additional Costs are calculated based on the value you have entered
					</p>
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>Order Subtotal</td>
									<th>INR 1999</th>
								</tr>
								<tr>
									<td>Shipping & Handling</td>
									<td>INR 0</td>
								</tr>
								<tr>
									<td>Tax</td>
									<td>INR 0</td>
								</tr>
								<tr class="total">
									<td>Total</td>
									<th>INR 1999</th>
								</tr>
							</tbody>
						</table>
					</div>
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