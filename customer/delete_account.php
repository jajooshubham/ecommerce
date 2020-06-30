
	<div id="content">
		<div class="container">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="index.php?home">Home</a></li>
					<li><a href="index.php?customer/my_account">My Account</a></li>
					<li>Delete Account</li>
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
		<h1>Do Really Want Delete Your Account</h1>
		
	
		<hr>
		<form action="delete_account.php" method="post" enctype="multipart/form-data">
			<input type="submit" name="yes" value="Yes, I Want To Delete" class="btn btn-danger">
			<input type="submit" name="no" value="No, I Don't Want To Delete" class="btn btn-primary">
		</form>
	</center>
</div>
</div>