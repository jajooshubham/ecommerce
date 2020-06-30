
	<div id="content">
		<div class="container">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Shop</li>
				</ul>
			</div>

			<div class="col-md-3">
				<?php
				include("includes/sidebar.php");
				?>
			</div>

			<div class="col-md-9">
				<div class="row" id="productmain">
					<div class="col-sm-6">
						<div id="mainimage">
							<div id="myCarousel" class="carousel slide" data-ride="caraousel">
								<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="item active">
									<center>
										<img src="admin_area/product_images/bg_1.jpg" class="img-responsive">
									</center>
									</div>
									<div class="item">
										<center>
											<img src="admin_area/product_images/bg_2.jpg" class="img-responsive">
										</center>
									</div>
									<div class="item">
										<center>
											<img src="admin_area/product_images/image_5.jpg" class="img-responsive">
										</center>
									</div>
								</div>

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

					<div class="col-sm-6">
						<div class="box">
							<h1 class="text-center">BENETTON White polo shirt</h1>
							<form action="details.php" method="post" class="form-horizontal">
								<div class="form-group">
									<label class="col-md-6 control-label">Product Quantity</label>
									<div class="col-md-7">
										<select name="product_qty" class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-6 control-label">Product Size</label>
									<div class="col-md-7">
										<select name="product_size" class="form-control">
											<option>Select a Size</option>
											<option>Small        </option>
											<option>Medium       </option>
											<option>Large        </option>
											<option>Extra Large   </option>
										</select>
									</div>
								</div>

								<p class="price">INR 200</p>
								<p class="text-center buttons">
									<button class="btn btn-primary" type="submit">
										<i class="fa fa-shopping-cart"></i> Add To Cart
									</button>
								</p>
							</form>
						</div>
						<div class="col-xs-4">
							<a class="thumb" href="">
								<img src="admin_area/product_images/bg_1.jpg" class="img-responsive">
							</a>
						</div>

						<div class="col-xs-4">
							<a class="thumb" href="">
								<img src="admin_area/product_images/bg_2.jpg" class="img-responsive">
							</a>
						</div>

						<div class="col-xs-4">
							<a class="thumb" href="">
								<img src="admin_area/product_images/image_5.jpg" class="img-responsive">
							</a>
						</div>
					</div>
				</div>

				<div class="box" id="details">
					<h4>Product Details</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					<h4>Size</h4>
					<ul>
						<li>Small        </li>			
						<li>Medium       </li>
						<li>Large        </li>
						<li>Extra Large  </li>
					</ul>
				</div>

				<div id="row same-height-row">
					<div class="col-md-3 col-sm-6">
						<div class="box same-height headline">
							<h3 class="text-center">You Also Like These Products</h3>
						</div>
					</div>

					<div class="center-responsive col-md-3">
						<div class="product same-height">
							<a href="">
								<img src="admin_area/product_images/image_5.jpg" class="img-responsive">
							</a>
							<div class="text">
								<h3><a href="details.php">BENETTON White polo shirt</a></h3>
								<p class="price">INR 299</p>
							</div>
						</div>
					</div>

					<div class="center-responsive col-md-3">
						<div class="product same-height">
							<a href="">
								<img src="admin_area/product_images/image_5.jpg" class="img-responsive">
							</a>
							<div class="text">
								<h3><a href="details.php">BENETTON White polo shirt</a></h3>
								<p class="price">INR 299</p>
							</div>
						</div>
					</div>

					<div class="center-responsive col-md-3">
						<div class="product same-height">
							<a href="">
								<img src="admin_area/product_images/image_5.jpg" class="img-responsive">
							</a>
							<div class="text">
								<h3><a href="details.php">BENETTON White polo shirt</a></h3>
								<p class="price">INR 299</p>
							</div>
						</div>
					</div>
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