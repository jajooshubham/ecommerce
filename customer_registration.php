
	<div id="content">
		<div class="container">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Registration</li>
				</ul>
			</div>

			<div class="col-md-3">
				<?php
				include("includes/sidebar.php");
				?>
			</div>

			<div class="col-md-9">
				<div class="box">
					<div class="box-header">
						<center>
							<h2>Customer Registration</h2>
							<p class="text-muted">If you have any questions, please feel free to message us, Our Customer service is working for you 24/7</p>
						</center>
					</div>
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
						</div>
						<div class="text-center">
							<button class="btn btn-primary" type="submit" name="submit">
								<i class="fa fa--user-md"></i>Register
							</button>
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