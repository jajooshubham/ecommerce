<?php
if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}

else{



?>



<nav class="navbar navbar-inverse navbar-fixed-top" style="background:black">
	<div class ="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle Navigation </span>
			<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
		</button>
		<a href="index.php?dashboard" class="navbar-brand">Admin Panel</a>	
	</div>





	<ul class="nav navbar-right top-nav"><!--nav navbar-right top-nav Starts-->
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-user"></i> <?php echo $admin_name ?>
			</a>
			<ul class ="dropdown-menu">
				<li>
					<a href="index.php?user_profile?id=<?php echo $admin_id ?>">
						<i class="fa fa-fw-user"></i> Profile
					</a>
				</li>

				<li>
					<a href="index.php?view_product">
						<i class="fa fa-fw-envelops"></i> Products
						<span class="badge"><?php echo $count_pro ?></span>
					</a>
				</li>

				<li>
					<a href="index.php?view_customer">
						<i class="fa fa-fw-user"></i> Customer
						<span class="badge"><?php echo $count_cust ?></span>
					</a>
				</li>

				<li>
					<a href="index.php?pro_cat">
						<i class="fa fa-fw-gear"></i> Product Categories
						<span class="badge"><?php echo $count_p_cat ?></span>
					</a>
				</li>

				<li class="divider"></li>

				<li>
					<a href="logout.php">Logout
						<i class ="fa fa-fw fa-power-off"></i>
					</a>
				</li>
			</ul>
		</li>
	</ul><!-- Navbar-right top-nav End-->





	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav side-nav">
			<li>
				<a href="index.php?dashboard">
					<i class ="fa fa-fw fa-dashboard"></i>Dashboard
				</a>
			</li>



			<li> <!-- Start Here -->
				<a href="#" data-toggle="collapse" data-target="#products">
					<i class= "fa fa-fw fa-table"></i>Product
					<i class="fa fa-fw fa-caret-down"></i>
				</a>
			
		
				<ul class="collapse" id="products">
					<li>
						<a href="index.php?insert_product">Insert Product</a>
					</li>
					<li>
						<a href="index.php?view_product">View Product</a>
					</li>
				</ul>
			</li><!-- Ennds Here -->


			<li> <!-- Start Here -->
				<a href="#" data-toggle="collapse" data-target="#product_cat">
					<i class= "fa fa-fw fa-table"></i>Product Categories
					<i class="fa fa-fw fa-caret-down"></i>
				</a>
			
		
				<ul class="collapse" id="product_cat">
					<li>
						<a href="index.php?insert_product_cat">Insert Product Categories</a>
					</li>
					<li>
						<a href="index.php?view_product_cat">View Product Categories</a>
					</li>
				</ul>
			</li><!-- Ennds Here -->



			<li> <!-- Start Here -->
				<a href="#" data-toggle="collapse" data-target="#categories">
					<i class= "fa fa-fw fa-table"></i>Categories
					<i class="fa fa-fw fa-caret-down"></i>
				</a>
			
		
				<ul class="collapse" id="categories">
					<li>
						<a href="index.php?insert_category">Insert Category</a>
					</li>
					<li>
						<a href="index.php?view_category">View Category</a>
					</li>
				</ul>
			</li><!-- Ennds Here -->



		<li> <!-- Start Here -->
				<a href="#" data-toggle="collapse" data-target="#slider">
					<i class= "fa fa-fw fa-table"></i>Slider
					<i class="fa fa-fw fa-caret-down"></i>
				</a>
			
		
		<ul class="collapse" id="slider">
			<li>
				<a href="index.php?insert_product">Insert Slider</a>
			</li>
			<li>
				<a href="index.php?view_product">View Slider</a>
			</li>
		</ul>
	</li><!-- Ennds Here -->



	<li>
		<a href="index.php?view_customer">
			<i class="fa fa-fw fa-edit"></i>View Customer
		</a>
	</li>

	<li>
		<a href="index.php?view_order">
			<i class="fa fa-fw fa-list"></i>View Order
		</a>
	</li>

	<li>
		<a href="index.php?view_payments">
			<i class="fa fa-fw fa-pencil"></i>View Payments
		</a>
	</li>

	<li> <!-- Start Here -->
				<a href="#" data-toggle="collapse" data-target="#users">
					<i class= "fa fa-fw fa-table"></i>Users
					<i class="fa fa-fw fa-caret-down"></i>
				</a>
			
		
		<ul class="collapse" id="users">
			<li>
				<a href="index.php?insert_user">Insert Users</a>
			</li>
			<li>
				<a href="index.php?view_user">View User</a>
			</li>
			<li>
				<a href="index.php?user_profile?id=<?php echo $admin_id ?>">Edit Profile</a>
			</li>
		</ul>
	</li><!-- Ennds Here -->

  		</ul>
	</div>

</nav>


<?php } ?>