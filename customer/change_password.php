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