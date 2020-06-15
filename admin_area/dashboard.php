<?php
if(!isset($_SESSION['admin_email'])){

	echo "<script>window.open('login.php','_self')</script>";

}

else{



?>


<div class="row"><!-- 1 Row Start -->
	<div class="col-lg-l2">
		<h1 class="page-header">Dashboard</h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i>Dashboard
			</li>
		</ol>
	</div>
</div><!-- 1 Row End -->

<div class="row"><!-- 2 Row Start -->

<div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 Starts -->

<div class="panel panel-primary"><!--panel panel-primary Starts -->

<div class="panel-heading"><!--panel-heading Starts -->

<div class="row"><!-- row Starts -->

<div class="col-xs-3"><!--col-xs-3 Starts -->

<i class="fa fa-tasks fa-5x"></i>

</div><!--col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!--col-xs 9-text-right Starts -->

<div class="huge"><?php echo $count_pro ?></div>
<div>Products</div>

</div><!--col-xs-9 text-right Ends -->

</div><!--panel-heading row Ends -->

</div><!--panel-heading Ends -->

<a href="index.php?view_product">

<div class="panel-footer"><!--panel-footer Starts -->

<span class="pull-left">View Details </span>

<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->

</div>





<div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 Starts -->

<div class="panel panel-green"><!--panel panel-primary Starts -->

<div class="panel-heading"><!--panel-heading Starts -->

<div class="row"><!-- row Starts -->

<div class="col-xs-3"><!--col-xs-3 Starts -->

<i class="fa fa-tasks fa-5x"></i>

</div><!--col-xs-3 Ends -->

<div class="col-xs-9-text-right"><!--col-xs-9-text-right Starts -->

<div class="huge"><?php echo $count_cust ?></div>

<div>Customers</div>

</div><!--col-xs-9-text-right Ends -->

</div><!--panel-heading row Ends -->

</div><!--panel-heading Ends -->

<a href="index.php?view_product">

<div class="panel-footer"><!--panel-footer Starts -->

<span class="pull-left">View Details </span>

<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->





<div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 Starts -->

<div class="panel panel-red"><!--panel panel-primary Starts -->

<div class="panel-heading"><!--panel-heading Starts -->

<div class="row"><!-- row Starts -->

<div class="col-xs-3"><!--col-xs-3 Starts -->

<i class="fa fa-tasks fa-5x"></i>

</div><!--col-xs-3 Ends -->

<div class="col-xs-9-text-right"><!--col-xs-9-text-right Starts -->

<div class="huge"><?php echo $count_p_cat ?></div>
<div>Product Categories</div>

</div><!--col-xs-9-text-right Ends -->

</div><!--panel-heading row Ends -->

</div><!--panel-heading Ends -->

<a href="index.php?view_product_cat">

<div class="panel-footer"><!--panel-footer Starts -->

<span class="pull-left">View Details </span>

<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->




<div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 Starts -->

<div class="panel panel-yellow"><!--panel panel-primary Starts -->

<div class="panel-heading"><!--panel-heading Starts -->

<div class="row"><!-- row Starts -->

<div class="col-xs-3"><!--col-xs-3 Starts -->

<i class="fa fa-tasks fa-5x"></i>

</div><!--col-xs-3 Ends -->

<div class="col-xs-9-text-right"><!--col-xs-9-text-right Starts -->

<div class="huge"><?php echo $count_order ?></div>
<div>Orders</div>

</div><!--col-xs-9-text-right Ends -->

</div><!--panel-heading row Ends -->

</div><!--panel-heading Ends -->

<a href="index.php?view_product_c">

<div class="panel-footer"><!--panel-footer Starts -->

<span class="pull-left">View Details </span>

<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->

</div><!-- 2 row Ends-->




<div class="row"><!-- 3 row starts-->

<div class="col-lg-8"><!-- col-lg-8 starts-->

<div class="panel panel-primary" ><!--panel panel-primary starts-->

<div class="panel-heading"><!--panel-heading stars -->

<h3 class="panel-title"><!-- panel-title starts-->

<i class="fa fa-money fa-fw"></i> New Orders

</h3><!-- panel-title closed-->
	
</div><!--panel-heading ends -->

<div class="panel-body"><!-- panel-body starts -->

<div class="table-responsive"><!-- table-responsive starts-->

<table class="table table-bordered table-hover table-striped"><!--table table-bordered table-hover table-striped starts-->

<thead><!--thead starts-->
	
<tr>
	
<th>Order No.:</th>

<th>customer id:</th>

<th>Invoice No.:</th>

<th>Total:</th>

<th>Date:</th>

<th>status:</th>

</tr>

</thead><!--thead ends-->


<tbody><!--tbody starts-->

<<?php 
$i=0;
$get_order="select * from customer_order order by 1 DESC LIMIT 0,5";
$run_order=mysqli_query($con,$get_order);

while ($row_order=mysqli_fetch_array($run_order)){
	$order_id=$row_order['order_id'];
	$customer_id_id=$row_order['customer_id'];
	$invoice_no=$row_order['invoice_no'];
	$qty=$row_order['qty'];
	$size=$row_order['size'];
	$order_status=$row_order['order_staus'];

	
 ?>

	
<tr>
	
<td></td>

<td></td>

<td></td>

<td></td>

<td></td>

<td></td>

</tr>	
<<?php } ?>

</tbody><!--tbody ends-->	

</table><!--table table-bordered table-hover table-striped ends-->
	
</div><!--table-responsive ends-->

<div class="text-right"><!--text right starts-->

<a href="index.php?view_orders">
View All orders <i class="fa fa-arrow-circle-right"></i>
</a>
	
</div><!--text right ends-->

</div><!--panel-body ends-->
	
</div><!--panel panel-primary ends-->
	
</div><!--col-lg-8 ends-->


<div class="col-md-4"><!--col-md-4 starts-->

<div class="panel"><!--panel starts-->

<div class="panel-body"><!--panel body starts-->

<div class="thumb-info mb-md"><!--thumb-info mb-md starts-->

<img src="product_images/bg_2.jpg" class="rounded img-responsive">

<div class="thumb-info-title"><!--thumb-info-title starts-->

<span class="thumb-info-inner">Admin Name</span>

<span class="thumb-info-type">Admin Job</span>
	
</div><!--thumb-info-title ends-->
	
</div><!--thumb-info mb-md ends-->

<div class="mb-md"><!--mb-md starts-->
	
<div class="widget-content-expanded"><!--widget-content-expanded starts-->
	
<i class="fa fa-user"></i><span>Email:</span> Admin Email <br>
<i class="fa fa-user"></i><span>Country:</span> Admin country <br>
<i class="fa fa-user"></i><span>Contact:</span> Admin contact <br>


</div><!--widget-content-expended ends-->

<hr class="dotted short">

<h5 class="text-muted">About</h5>

<p>
Adimin About
</p>

</div><!--mb-md ends-->
	
</div><!--panel-body ends-->
	
</div><!--panel ends-->
	
</div><!--col-md-4 ends-->
	
</div><!-- 3 row ends  -->

</div>

<?php } ?>