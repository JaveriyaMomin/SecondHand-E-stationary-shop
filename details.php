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
			<div class="row" id="productmain">
				<div class="col-sm-6">
					<div id="mainimage">
						<div class="carousel slide" id="myCarousel" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="myCarousel" data-slide-to="1"></li>
								<li data-target="myCarousel" data-slide-to="2"></li>

							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<center>
									<img src="admin_area/product_images/product1.jpg" >
									</center>
								</div>
								<div class="item">
									<center>
									<img src="admin_area/product_images/product1.jpg">
									</center>
								</div>
								<div class="item">
									<center>
									<img src="admin_area/product_images/product1.jpg">
									</center>
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
				<div class="col-sm-6">
					<div class="box">
						<h1 class="text-center">Engineering Mathematics - I by G. V. Khumbhojkar</h1>
						<p class="price">INR 170</p>
						<p class="text-center buttons">
								<button class="btn btn-primary" type="submit">
									<i class=fa fa-shopping-cart"></i>Add to Cart
								</button>
							</p>
					</div>
					<div class="col-xs-4">
						<a href="#" class="thumb">
							<img src="admin_area/product_images/product4.jpg">
						</a>
						
					</div>
					<div class="col-xs-4">
						<a href="#" class="thumb">
							<img src="admin_area/product_images/product4.jpg">
						</a>
						
					</div>
					<div class="col-xs-4">
						<a href="#" class="thumb">
							<img src="admin_area/product_images/product4.jpg">
						</a>
						
					</div>
				</div>
				
			</div>
			<div class="box" id="details">
				<h4>Product Details</h4>
				<p>
					This is the Engineering MAthematics-I books famous for mumbai university. This book has been used just for 1 year. 
				</p>
				<h4>Author</h4>
				<ul>
					<li>G.V. Khumbhojkar</li>
				</ul>
				<div id="row same-height-row">
					<div class="col-md-3 col-sm-6">
						<div class="box same-height headline">
							<h3 class="text-center">You may also require these products
								
							</h3>
						</div>
					</div>
					<div class="center-responsive col-md-3">
						<div class="product same-height">
							<a href="src="admin_area/product_images/product4.jpg" class="img-responsive"></a>
							<div class="text">
								<h3><a href="details.php">Engineering Mathematics-I</a></h3>
								<p class="price">
									INR 170
								</p>
							</div>
						</div>
						
					</div>
					<div class="center-responsive col-md-3">
						<div class="product same-height">
							<a href="admin_area/product_images/product1.jpg" class="img-responsive"></a>
							<div class="text">
								<h3><a href="details.php">Engineering Mathematics-I</a></h3>
								<p class="price">
									INR 170
								</p>
							</div>
						</div>
						
					</div>
					<div class="center-responsive col-md-3">
						<div class="product same-height">
							<a href="admin_area/product_images/product1.jpg" class="img-responsive"></a>
							<div class="text">
								<h3><a href="details.php">Engineering Mathematics-I</a></h3>
								<p class="price">
									INR 170
								</p>
							</div>
						</div>
						
					</div>
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