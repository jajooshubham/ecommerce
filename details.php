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
						<a href="customer_register.php">Register</a>
					</li>
					<li>
						<a href="checkout.php">My Account</a>
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
							<a href="home.php">Home</a>
						</li>
						<li class="active">
							<a href="shop.php">Shop</a>
						</li>
						<li>
							<a href="checkout.php">My Account</a>
						</li>
						<li>
							<a href="cart.php">Shopping Cart</a>
						</li>
						<li>
							<a href="cart.php">About Us</a>
						</li>
						<li>
							<a href="cart.php">Services</a>
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
					<li>Shop</li>
				</ul>
			</div>

			<div class="col-md-3">
				<?php
				include("includes/sidebar.php");
				?>
			</div>

			<div class="col-md-9">
				<div class="row" id="productmain">
					<div class="col-sm-6">
						<div id="mainimage">
							<div id="myCarousel" class="carousel slide" data-ride="caraousel">
								<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="item active">
									<center>
										<img src="admin_area/product_images/bg_1.jpg" class="img-responsive">
									</center>
									</div>
									<div class="item">
										<center>
											<img src="admin_area/product_images/bg_2.jpg" class="img-responsive">
										</center>
									</div>
									<div class="item">
										<center>
											<img src="admin_area/product_images/image_5.jpg" class="img-responsive">
										</center>
									</div>
								</div>

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

					<div class="col-sm-6">
						<div class="box">
							<h1 class="text-center">BENETTON White polo shirt</h1>
							<form action="details.php" method="post" class="form-horizontal">
								<div class="form-group">
									<label class="col-md-6 control-label">Product Quantity</label>
									<div class="col-md-7">
										<select name="product_qty" class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-6 control-label">Product Size</label>
									<div class="col-md-7">
										<select name="product_size" class="form-control">
											<option>Select a Size</option>
											<option>Small        </option>
											<option>Medium       </option>
											<option>Large        </option>
											<option>Extra Large   </option>
										</select>
									</div>
								</div>

								<p class="price">INR 200</p>
								<p class="text-center buttons">
									<button class="btn btn-primary" type="submit">
										<i class="fa fa-shopping-cart"></i> Add To Cart
									</button>
								</p>
							</form>
						</div>
						<div class="col-xs-4">
							<a class="thumb" href="">
								<img src="admin_area/product_images/bg_1.jpg" class="img-responsive">
							</a>
						</div>

						<div class="col-xs-4">
							<a class="thumb" href="">
								<img src="admin_area/product_images/bg_2.jpg" class="img-responsive">
							</a>
						</div>

						<div class="col-xs-4">
							<a class="thumb" href="">
								<img src="admin_area/product_images/image_5.jpg" class="img-responsive">
							</a>
						</div>
					</div>
				</div>

				<div class="box" id="details">
					<h4>Product Details</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					<h4>Size</h4>
					<ul>
						<li>Small        </li>			
						<li>Medium       </li>
						<li>Large        </li>
						<li>Extra Large  </li>
					</ul>
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


		</div>
	</div>

	<!-- footer -->
	<?php
	include("includes/footer.php");
	?>	

</body>
</html>