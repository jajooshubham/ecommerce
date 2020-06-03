<nav class="navbar navbar-inverse navbar-fixed-top" style="background:black">
	<div class ="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle Navigation </span>
			<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
		</button>
		<a href="index.php?dashboard" class="navbar-brand"?Admin Panel></a>	
	</div>
	<ul class="nav navbar-right top-nav"><!--nav navbar-right top-nav Starts-->
		<li class="dropdown">
			<a href-"#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-user"></i> Abhishek Shrimal
			</a>
			<ul class ="dropdown-menu">
				<li>
					<a href="index.php?user_profile">
						<i class="fa fa-fw-user"></i> Profile
					</a>
				</li>

				<li>
					<a href="index.php?view_product">
						<i class="fa fa-fw-envelops"></i> Products
					</a>
				</li>

				<li>
					<a href="index.php?view_customer">
						<i class="fa fa-fw-user"></i> Customer
					</a>
				</li>

				<li>
					<a href="index.php?pro_cat">
						<i class="fa fa-fw-gear"></i> Product Categories
					</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="loghout.php">Logout
						<i class ="fa fa-fw-power-off"></i>
					</a>
				</li>
			</ul>
		</li>
	</ul><!-- Navbar-right top-nav End-->

	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav side-nav">
			<li>
				<a href="index.php?dashboard">
					<i class ="fa fa-fw-dashboard"></i>Dashboard
				</a>
			</li>

			<li>
				<a href="#" data-toggle="collapse" data-target="#products">
					<i class= "fa fa-fw fa-table"></i>Product
					<i class="fa fa-fw fa-caret-down"></i>
				</a>
			</li>
		</ul>
		<ul class="collapse" id="products">
			<li>
				<a href="index.php?insert_product">Insert Product</a>
			</li>
			<li>
				<a href="index.php?view_product">View Product</a>
			</li>
		</ul>
	</div>

</nav>
