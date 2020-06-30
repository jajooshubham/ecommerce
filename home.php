
<div class="container" id="section">
		
		<div class="col-md-12">
			
			<div class="carousel slide" id="myCarousel" data-ride="carousel">
				
				<ol class="carousel-indicators">
					
					<li data-target="myCarousel" data-slide-to="0" class="action"></li>
					<li data-target="myCarousel" data-slide-to="1"></li>
					<li data-target="myCarousel" data-slide-to="2"></li>
					<li data-target="myCarousel" data-slide-to="3"></li>

				</ol>

				<div class="carousel-inner">
					
					<?php
						$get_slider="select * from slider LIMIT 0,1";
						$run_slider=mysqli_query($con,$get_slider);
						while($row=mysqli_fetch_array($run_slider)){
							$slider_name=$row['slider_name'];
							$slider_image=$row['slider_image'];
							echo "<div class = 'item active'>
								<img src='admin_area/slider_images/$slider_image'>
							</div>";
						}
					?>
					
					<?php
						$get_slider="select * from slider LIMIT 1,3";
						$run_slider=mysqli_query($con,$get_slider);
						while($row=mysqli_fetch_array($run_slider)){
							$slider_name=$row['slider_name'];
							$slider_image=$row['slider_image'];
							echo "<div class = 'item '>
								<img src='admin_area/slider_images/$slider_image'>
							</div>";
						}
					?>





				</div><!--carousel-inner End-->

				<a href="#myCarousel" class="left carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a href="#myCarousel" class="right carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>

			</div>

		</div>

	</div>

	<div id="advantage">
		
		<div class="container">
			<div class="same-height-row">
				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="">BEST PRICES</a></h3>
						<p>you can check on all other sites about the prices and then compare with us.</p>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="">100% SATISFACTION GURANTEED FROM US</a></h3>
						<p>Free returns on everything for 3 months</p>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="">WE LOVE OUR CUSTOMERS</a></h3>
						<p>We are known to provide best possible service ever</p>
					</div>
				</div>

			</div>
		</div>
	</div>


	<div id="hot">
		<div class="box">
			<div class="container">
				<div class="col-md-12">
					<h2>LATEST THIS WEEK</h2>
				</div>
			</div>
		</div>
	</div>


	<div class="container" id="content">
		<div class="row">
			<?php
			getpro(); 
			 ?>
		</div>
	</div>

