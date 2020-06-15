<div class="box">
	<center>
		<h1>Edit Your Account</h1>
		<p>If you have any questions, please feel free to message us, Our Customer service is working for you 24/7</p>
	</center>
	<hr>
	<form action="customer_registration.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="c_ame" required="" class="form-control">
		</div>
		<div class="form-group">
			<label>E-mail</label>
			<input type="text" name="c_email" required="" class="form-control">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="c_password" required="" class="form-control">
		</div>
		<div class="form-group">
			<label>Country</label>
			<input type="text" name="c_country" required="" class="form-control">
		</div>
		<div class="form-group">
			<label>City</label>
			<input type="text" name="c_city" required="" class="form-control">
		</div>
		<div class="form-group">
			<label>Contact Number</label>
			<input type="text" name="c_contact" required="" class="form-control">
		</div>
		<div class="form-group">
			<label>Address</label>
			<input type="text" name="c_address" required="" class="form-control">
		</div>
		<div class="form-group">
			<label>Image</label>
			<input type="file" name="c_image" required="" class="form-control">
			<img src="customer_images/client_2.png" class="img-responsive" he="100px" width="100px">
		</div>
		<div class="text-center">
			<button class="btn btn-primary" type="submit" name="update">
				<i class="fa fa--user-md"></i> Update Now
			</button>
		</div>
	</form>
</div>