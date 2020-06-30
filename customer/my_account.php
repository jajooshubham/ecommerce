
	<div id="content">
		<div class="container">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="index.php?home">Home</a></li>
					<li>My Account</li>
				</ul>
			</div>

			<div class="col-md-3">
				<?php
				include("includes/sidebar.php");
				?>
			</div>

			<div class="container">
				<?php
				if(isset($_GET['my_order'])){
					include("my_order.php");
				}
				?>

				<?php
				if(isset($_GET['pay_offline'])){
					include("pay_offline.php");
				}
				?>

				<?php
				if(isset($_GET['edit_account'])){
					include("edit_account.php");
				}
				?>

				<?php
				if(isset($_GET['change_password'])){
					include("change_password.php");
				}
				?>

				<?php
				if(isset($_GET['delete_account'])){
					include("delete_account.php");
				}
				?>
			</div>
		</div>
	</div>
