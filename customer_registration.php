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
							<li class="active">
								<a href="index.php">Home</a>
							</li>
							<li >
								<a href="shop.php">Shop</a>
							</li>
							<li>
								<a href="checkout.php">My Account</a>
							</li>
							<li>
								<a href="cart.php">Shopping Cart</a>
							</li>
							<li >
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
				<li>Registration</li>
			</ul>
		</div>
		<div class="col-md-3">
			<?php
			include("includes/sidebar.php");
			?>
		</div>
		
		<div class="col-md-9">
			<div class="box">
				<div class="box-header">
					<center>
						<h2>Registration</h2>
						
					</center>
					
				</div>
				<form action="customer_registration.php" method="post" enctype="multipart-form-data">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="c_name" required="" class="form-control">
						
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="c_email" required="" class="form-control">
						
					</div>
					<div class="form-group">
						<label>UIN</label>
						<input type="text" name="uin" required="" class="form-control">
						
					</div>
					<div class="form-group">
						<label>Mobile No.</label>
						<input type="text" name="c_number" required="" class="form-control">
						
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" required="" class="form-control">
						
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" name="password" required="" class="form-control">
						
					</div>
					<div class="form-group">
						<label>Image</label>
						<input type="file" name="c_image" required="" class="form-control">
						
					</div>


					
					<div class="text-center">
						<button type="submit" name="submit" class="btn btn-primary">
							<i class="fa fa-user-md"></i>Register
							
						</button>
						
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