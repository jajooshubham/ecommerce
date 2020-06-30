
	<div id="content">
		<div class="container">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="index.php?home">Home</a></li>
					<li><a href="index.php?customer/my_account">My Account</a></li>
					<li>Change Password</li>
				</ul>
			</div>

			<div class="col-md-3">
				<?php
				include("includes/sidebar.php");
				?>
			</div>

<div class="col-md-9">
<div class="box">
	<center>
		<h1>Change Your Password</h1>
		
	</center>
	<hr>
	<form action="change_password.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Enter Your Current Password</label>
			<input type="password" name="old_password" required="" class="form-control">
		</div>
		<div class="form-group">
			<label>Enter Your New Password</label>
			<input type="password" name="new_password" required="" class="form-control">
		</div>
		<div class="form-group">
			<label>Confirm New Password</label>
			<input type="password" name="c_new_password" required="" class="form-control">
		</div>
		<div class="text-center">
			<button class="btn btn-primary" type="submit" name="update">
				<i class="fa fa-user"></i> Update Now
			</button>
		</div>
	</form>
</div>
</div>