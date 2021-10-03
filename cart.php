<!doctype html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" rel="stylesheet" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
</head>
<body>
		<div id="top">
			<div class="container">
				<dir class="col-md-6 offer">
					<a href="#"class="btn btn-success btn-sm">
						Welcome Guest
					</a>
					
				</dir>
				<div class="col-md-6">
					<ul class="menu">
						<li>
							<a href="checkout.php">My Account</a>
						</li>
						<li>
							<a href="cart.php">Cart</a>
						</li>
						<li>
							<a href="customer_registration.php">Registration</a>
						</li>
						<li>
							<a href="login.php">Login</a>
						</li>
				</div>
			</div>
		</div>
		<div class="navbar navbar-default" id="navbar">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand home" href="index.php">
						<img src="images/logo.jpg" alt="secondhand" class="hidden-xs">
						<img src="images/logo.jpg" alt="secondhand" class="visible-xs">
					</a>

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
						<span class="sr-only">Toggle Navigation</span>
						<i class="fa fa-align-justify"></i>
					</button>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
						<span class="sr-only"></span>
						<i class="fa fa-search"></i>
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navigation">
					<div class="padding-nav">
						<ul class="nav navbar-nav navbar-left">
							<li>
								<a href="index.php">Home</a>
							</li>
							<li >
								<a href="shop.php">Shop</a>
							</li>
							<li>
								<a href="checkout.php">My Account</a>
							</li>
							<li class="active">
								<a href="cart.php">Shopping Cart</a>
							</li>
							<li>
								<a href="contactus.php">Contact Us</a>
							</li>
						</ul>
					</div>
					<a href="cart.php" class="btn btn-primary navbar-btn right">
						<i class="fa fa-shopping-cart"></i>
						<span>Items in Cart</span>
					</a>

					<div class="navbar-collapse collapse-right">
						<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="search"></button>
						<span class="sr-only">Toggle Search</span>
						<i class="fa fa-search"></i>
					</div>

					<div class="collapse clearfix" id="search">
						<form class="navbar-form" method="get" action="result.php">
							<div class="input-group">
								<input type="text" name="user_query" placeholder="Serach" class="form-control" required="">
								<span class="input-group-btm">
								<button type="submit" value="Search" name="search" class="btn btn-primary">
									<i class="fa fa-search"></i>
								</button>
								</span>
							</div>
						</form>
					</div>
				</div>
							
			</div>
		</div>
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
				<form action="cart.php" method="post" enctype="multipart-form-data">
					<h1>Shopping Cart</h1>
					<p class="text-muted"> Curently you have 3 item in cart	
					</p>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th colspan="2">Product</th>
									<th>Author</th>
									<th>Price</th>
									<th colspan="1">Delete</th>
									<th colspan="1">Subtotal</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><img src="admin_area/product_images/product1.jpg"></td>
									<td>Engineering Mathematics-I</td>
									<td>Author</td>
									<td>Price</td>
									<td><input type="checkbox" name="remove"></td>
									<td>INR 170</td>
								</tr>
								<tr>
									<td><img src="admin_area/product_images/product1.jpg"></td>
									<td>Engineering Mathematics-I</td>
									<td>Author</td>
									<td>Price</td>
									<td><input type="checkbox" name="remove"></td>
									<td>INR 170</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th colspan="5">Total</th>
									<th colspan="2">INR 340</th>
								</tr>
							</tfoot>
							
						</table>
					</div>
					<div class="box-footer">
						<div class="pull-left">
							<a href="index.php" class="btn btn-default">
								<i class="fa fa-chevron-left">Continue Shopping</i>
							</a>
							
						</div>
						<div class="pull-right">
							<button class="btn btn-default" type="submit" name="update" value="Update Cart">
								<i class="fa fa-refresh">Update Cart</i>
							</button>
							
								<a href="checkout.php" class="btn btn-primary"> Proceed to Checkout
									<i class="fa fa-chevron-right"></i>
								</a>
							
						</div>
					</div>
				</form>
				
			</div>
		</div>
	</div>
</div>
		





<?php
include("includes/footer.php");
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>