<?php 
$db=mysqli_connect("localhost","root","","ecom");
function getpro(){
	global $db;
	$get_product="select * from products order by 1 DESC LIMIT 0,6";
	$run_product=mysqli_query($db,$get_product);
	while ($row_product=mysqli_fetch_array($run_product)) {
		$pro_id=$row_product['product_id'];
		$pro_type=$row_product['product_type'];
		$pro_price=$row_product['product_price'];
		$pro_img1=$row_product['product_img1'];

		echo "<div class='col-md-4 col-sm-6'>
		<div class='product'>
		<a href='details.php?pro_id=$pro_id'>
		<img src='admin_area/product_images/$pro_img1' class='img-responsive'>
		</a>
		<div class='text'>
		<h3><a href='details.php?pro_id=$pro_id'>$pro_type </a></h3>
		<p class='price'> INR $pro_price </p>
		<p class='buttons'>
		<a href='details.php?pro_id=$pro_id' class='btn btn-default'> View Details</a>
		<a href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>Add to cart</a>
		</p>
		</div>
		</div>
		</div>";
	}
}


/* Product Categories */

function getPCats(){
	global $db;
	$get_p_cat="select * from product_categories";
	$run_p_cat=mysqli_query($db,$get_p_cat);
	while ($row_p_cat=mysqli_fetch_array($run_p_cat)) {
		$p_cat_id=$row_p_cat['p_cat_id'];
		$p_cat_title=$row_p_cat['p_cat_title'];

		echo "<li><a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a></li>";
	}

}


/* Categories */

function getCat(){
	global $db;
	$get_cat="select * from categories";
	$run_cat=mysqli_query($db,$get_cat);
	while ($row_cat=mysqli_fetch_array($run_cat)) {
		$cat_id=$row_cat['cat_id'];
		$cat_title=$row_cat['cat_title'];

		echo "<li><a href='shop.php?cat=$cat_id'>$cat_title</a></li>";
	}

}

 ?>