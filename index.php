<!doctype html>
<html>
<head>
	<title>Home</title>

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
							<li class="active">
								<a href="index.php">Home</a>
							</li>
							<li>
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

	<div class="container" id="slider">
		<div class="col-md-12">
			<div class="carousel slide" id="myCarousel" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="myCarousel" data-slide-to="0" class="action"></li>
					<li data-target="myCarousel" data-slide-to="1"></li>
					<li data-target="myCarousel" data-slide-to="2"></li>
					<li data-target="myCarousel" data-slide-to="3"></li>

				</ol>
				<div class="carousel-inner">
					<div class="item active">
					<img src="admin_area/slider_images/1.jpg" align="center">
					</div>
					<div class="item">
					<img src="admin_area/slider_images/2.jpg"align="center">
					</div>
					<div class="item"><center>
					<img src="admin_area/slider_images/3.jpg"align="center"></center>
					</div>
				</div>
				<a href="#myCarousel" class="left carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a href="#myCarousel" class="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>

			</div>

		</div>

	</div>
	<div id="advanatge">
		<div class="container">
			<div class="same-height-row">
				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h5><a href="#">BEST PRICES</a></h5>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h5><a href="#">100% SATISFACTION GUARANTEED FROM US</a></h5>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h5><a href="#">EXCLUSIVE FOR RCOE</a></h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="hotbox">
		<div class="box">
			<div class="container">
				<div class="col-md-12">
					<h2>Latest this Week</h2>
				</div>
			</div>
		</div>
	</div>
	<div id="content" class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-6 single">
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product1.jpg" class="img-responsive">
					</a>
					<div>
						<h5><a href="details.php">Engineering Mathematics - I</a></h5>
						<p class="price">INR 160</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="details.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i>Add to cart
							</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-sm-6 single">
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product5.jpg" class="img-responsive">
					</a>
					<div>
						<h5><a href="details.php">Engineering Mathematics - II</a></h5>
						<p class="price">INR 180</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="details.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i>Add to cart
							</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-sm-6 single">
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product6.jpg" class="img-responsive">
					</a>
					<div>
						<h5><a href="details.php">Engineering Mathematics - III</a></h5>
						<p class="price">INR 190</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="details.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i>Add to cart
							</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-sm-6 single">
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product7.jpg" class="img-responsive">
					</a>
					<div>
						<h5><a href="details.php">Engineering Mathematics - IV</a></h5>
						<p class="price">INR 240</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="details.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i>Add to cart
							</a>
						</p>
					</div>
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