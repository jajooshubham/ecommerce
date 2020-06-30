
	<div id="content">
		<div class="container">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Cart</li>
				</ul>
			</div>

			<div class="col-md-9" id="cart">
				<div class="box">
					<form action="cart.php" method="post" enctype="multioart-form-data">
						<h1>Shopping Cart</h1>
						<p class="text-muted">Currently you have 3 item(s) in cart</p>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th colspan="2">Product</th>
										<th>Quantity</th>
	 									<th>Unit Price</th>	
										<th>Size</th>
										<th colspan="1">Delete</th>
										<th colspan="1">Sub Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><img src="admin_area/product_images/bg_1.jpg"></td>
										<td>BENETTON White polo shirt</td>
										<td>2</td>
	 									<td>INR 299</td>	
										<td>Large</td>
										<td><input type="checkbox" name="remove[]"></td>
										<td>INR 999</td>
									</tr>
									<tr>
										<td><img src="admin_area/product_images/bg_1.jpg"></td>
										<td>BENETTON White polo shirt</td>
										<td>2</td>
	 									<td>INR 299</td>	
										<td>Large</td>
										<td><input type="checkbox" name="remove[]"></td>
										<td>INR 999</td>
									</tr>
									<tr>
										<td><img src="admin_area/product_images/bg_1.jpg"></td>
										<td>BENETTON White polo shirt</td>
										<td>2</td>
	 									<td>INR 299</td>	
										<td>Large</td>
										<td><input type="checkbox" name="remove[]"></td>
										<td>INR 999</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th colspan="5">Total</th>
										<th colspan="2">INR 1999</th>
									</tr>
								</tfoot>
							</table>
						</div>

						<div class="box-footer">
							<div class="pull-left">
								<a href="index.php" class="btn btn-default">
									<i class="fa fa-chevron-left"></i> Continue Shopping
								</a>
							</div>
							<div class="pull-right">
								<button class="btn btn-default" type="submit" name="update" value="update cart">
									<i class="fa fa-refresh"></i> Update Cart
								</button>
								<a href="checkout.php" class="btn btn-primary">
									Proceed To Checkout <i class="fa fa-chevron-right"></i>
								</a>
							</div>
						</div>
					</form>
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

			<div class="col-md-3">
				<div class="box" id="order-summary">
					<div class="box-header">
						<h3>Order Summary</h3>
					</div>
					<p class="text-muted">
						Shipping and Additional Costs are calculated based on the value you have entered
					</p>
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>Order Subtotal</td>
									<th>INR 1999</th>
								</tr>
								<tr>
									<td>Shipping & Handling</td>
									<td>INR 0</td>
								</tr>
								<tr>
									<td>Tax</td>
									<td>INR 0</td>
								</tr>
								<tr class="total">
									<td>Total</td>
									<th>INR 1999</th>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>