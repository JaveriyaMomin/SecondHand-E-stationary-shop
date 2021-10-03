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
							<li class="active">
								<a href="shop.php">Shop</a>
							</li>
							<li>
								<a href="checkout.php">My Account</a>
							</li>
							<li>
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
				<li>Shop</li>
			</ul>
		</div>
		<div class="col-md-3">
			<?php
			include("includes/sidebar.php");
			?>
		</div>
		<div class="col-md-9">
			<div class="box">
				<h1>Shop</h1>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 center-responsive">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/product1.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h4>
								<a href="details.php">Engineering Mathematics - I</a>
							</h4>
							<p class="price">INR 170</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-default">View Details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								
							</p>
						</div>
					</div>
					
				</div>
				<div class="col-md-4 col-sm-6 center-responsive">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/product1.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h4>
								<a href="details.php">Engineering Mathematics - I</a>
							</h4>
							<p class="price">INR 170</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-default">View Details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								
							</p>
						</div>
					</div>
					
				</div>
				<div class="col-md-4 col-sm-6 center-responsive">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/product1.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h4>
								<a href="details.php">Engineering Mathematics - I</a>
							</h4>
							<p class="price">INR 170</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-default">View Details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								
							</p>
						</div>
					</div>
					
				</div>
				<div class="col-md-4 col-sm-6 center-responsive">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/product1.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h4>
								<a href="details.php">Engineering Mathematics - I</a>
							</h4>
							<p class="price">INR 170</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-default">View Details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								
							</p>
						</div>
					</div>
					
				</div>
				<div class="col-md-4 col-sm-6 center-responsive">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/product1.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h4>
								<a href="details.php">Engineering Mathematics - I</a>
							</h4>
							<p class="price">INR 170</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-default">View Details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								
							</p>
						</div>
					</div>
					
				</div>
				<div class="col-md-4 col-sm-6 center-responsive">
					<div class="product">
						<a href="details.php">
							<img src="admin_area/product_images/product1.jpg" class="img-responsive">
						</a>
						<div class="text">
							<h4>
								<a href="details.php">Engineering Mathematics - I</a>
							</h4>
							<p class="price">INR 170</p>
							<p class="buttons">
								<a href="details.php" class="btn btn-default">View Details</a>
								<a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								
							</p>
						</div>
					</div>
					
				</div>
			</div>
			<center>
				<ul class="pagination">
					<li><a href="shop.php">First Page</a></li>
					<li><a href="shop.php">1</a></li>
					<li><a href="shop.php">2</a></li>
					<li><a href="shop.php">3</a></li>
					<li><a href="shop.php">4</a></li>
					<li><a href="shop.php">5</a></li>
					<li><a href="shop.php">Last Page</a></li>
				</ul>
			</center>
		</div>
	</div>
</div>







		<?php
include("includes/footer.php");
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>