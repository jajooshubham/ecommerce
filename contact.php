
	<div id="content">
		<div class="container">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Contact</li>
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
							<h2>Message To Us Now</h2>
							<p class="text-muted">If you have any questions, please feel free to message us, Our Customer service is working for you 24/7</p>
						</center>
					</div>
					<form action="contact.php" method="post">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="Name" required="" class="form-control">
						</div>
						<div class="form-group">
							<label>E-mail</label>
							<input type="text" name="email" required="" class="form-control">
						</div>
						<div class="form-group">
							<label>Subject</label>
							<input type="text" name="submit" required="" class="form-control">
						</div>
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control" name="message"></textarea>
						</div>
						<div class="text-center">
							<button class="btn btn-primary" type="submit" name="submit">
								<i class="fa fa--user-md"></i> Send Message
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