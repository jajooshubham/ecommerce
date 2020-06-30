<div class="panel panel-default sidebar-menu">
	<div class="panel-heading">
		<center>
			<img src="customer_images/client_2.png" class="img-responsive">
			<br>
			<h3 class="panel-title">Shubham Jajoo</h3>
		</center>
	</div>
	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked category-menu">
			<li class="<?php if(isset($_GET[my_order])){echo "active";}?>">
				<a href="index.php?customer/my_account/my_order">
					<i class="fa fa-list"></i> My orders
				</a>
			</li>
			<li class="<?php if(isset($_GET[pay_offline])){echo "active";}?>">
				<a href="index.php?customer/my_account/pay_offline">
					<i class="fa fa-bolt"></i> Pay Offline
				</a>
			</li>
			<li class="<?php if(isset($_GET[my_address])){echo "active";}?>">
				<a href="index.php?customer/my_account/my_address">
					<i class="fa fa-user"></i> My Address
				</a>
			</li>
			<li class="<?php if(isset($_GET[edit_account])){echo "active";}?>">
				<a href="index.php?customer/my_account/edit_account">
					<i class="fa fa-pencil"></i> Edit Account
				</a>
			</li>
			<li class="<?php if(isset($_GET[change_password])){echo "active";}?>">
				<a href="index.php?customer/my_account/change_password">
					<i class="fa fa-user"></i> Change Password
				</a>
			</li>
			<!--<li class="<?php if(isset($_GET[my_wishlist])){echo "active";}?>">
				<a href="my_account.php?my_wishlist">
					<i class="fa fa-bolt"></i> My Wishlist
				</a>
			</li>-->
			<li class="<?php if(isset($_GET[delete_account])){echo "active";}?>">
				<a href="index.php?customer/my_account/delete_account">
					<i class="fa fa-trace-o"></i> Delete Account
				</a>
			</li>
			<li class="<?php if(isset($_GET[logout])){echo "active";}?>">
				<a href="index.php?customer/my_account/logout">
					<i class="fa fa-sign-out"></i> Logout
				</a>
			</li>
		</ul>
	</div>
</div>


<!--
<div class="panel panel-default sidebar-menu">
	<div class="panel-heading">
		<h3 class="panel-title">Categories</h3>
	</div>
	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked category-menu">
			<li><a href="shop.php">Mens</a></li>
			<li><a href="shop.php">Womens</a></li>
			<li><a href="shop.php">Kids</a></li>
			<li><a href="shop.php">Others</a></li>
		</ul>
	</div>
</div>
-->