<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<h4>Pages</h4>
				<ul>
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="checkout.php">My Account</a></li>
				</ul>
				<hr>
				<h4>User Section</h4>
				<ul>
					<li><a href="checckout.php">Login</a></li>
					<li><a href="customer_registration.php">Register</a></li>
				</ul>
				<hr class="hidden-md hidden-sm hidden-lg">
			</div>

			<div class="col-md-3 col-sm-6">
				<h4>Top Product Categories</h4>
				<ul>
					<?php
					$get_p_cat="select * from product_categories";
					$run_p_cat=mysqli_query($con,$get_p_cat);
					while ($row_p_cat=mysqli_fetch_array($run_p_cat)) {
					$p_cat_id=$row_p_cat['p_cat_id'];
					$p_cat_title=$row_p_cat['p_cat_title'];
					echo "<li><a href='shop.php?p_cat=$p_cat_id'>$p_cat_title </a></li>";

					}
					?>
				</ul>
				<hr class="hidden-md hidden-lg">
			</div>

			<div class="col-md-3 col-sm-6">
				<h4>Where To Find</h4>
				<p>
					<strong>sec2hand.com</strong>
					<br>jodhpur
					<br>jaipur
					<br>Rajasthan
					<br>contact@sec2hand.com
					<br>+91 999 999 9999
				</p>
				<a href="contact.php">GoTo Contact Us Page</a>
				<hr class="hidden-md hidden-lg">
			</div>

			<div class="col-md-3 col-sm-6">
				<h4>Get The News</h4>
				<p class="text-muted">
					Subscribe here for getting news of sec2hand lab
				</p>
				<form action="" method="post">
					<div class="input-group">
						<input type="text" name="email" class="form-control" placeholder="enter your email">
						<span class="input-group-btn">
							<input type="submit" value="subscribe" class="btn btn-default">
						</span>
					</div>
				</form>
				<hr>
				<h4>Stay In Touch</h4>
				<p class="social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-envelope"></i></a>
				</p>
			</div>
		</div>
	</div>
</div>	

<div id="copyright">
	<div class="container">
		<div class="col-md-6">
			<p class="pull-left">
				&copy; 2020 All Rights Reserved Under Sec2Hand
			</p>
		</div>
		<div class="col-md-6">
			<p class="pull-right">
				Designed & Developed by Webophile
			</p>
		</div>
	</div>
</div>		