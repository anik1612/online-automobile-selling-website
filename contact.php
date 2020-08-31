<?php

session_start();

if($_SESSION['login_user'])
{
	$username=$_SESSION['login_user'];
}
if(isset($_GET['error']))
{
	echo "<div class='alert alert-danger' role='alert'><strong>".$_GET['error']."</strong> Change a few things up and try submitting again.</div>";
}
if(isset($_GET['success']))
{
  echo "<div class='alert alert-success' role='alert'><strong>".$_GET['success']."</strong> Details Submitted.</div>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>PerkJet Online Showroom</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<link href='//fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

</head>

<body>
<!-- header -->
	<div class="header">
			<div class="header-grid">
					<div class="container">
				<div class="header-left animated wow fadeInLeft" data-wow-delay=".5s">
					<ul>
					<li><i class="glyphicon glyphicon-headphones"></i><a href="#">24x7 live support</a></li>
						<li><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:info@example.com">perkjet143@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" ></i>+1234 567 892</li>

					</ul>
				</div>
				<div class="header-right animated wow fadeInRight" data-wow-delay=".5s">
				<div class="header-right1 ">
					<ul>
                        <li><a href="#"><?php echo $username; ?></a></li>
						<li><i class="glyphicon glyphicon-log-out" ></i><a href="logout.php">Logout</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
			<div class="container">
			<div class="logo-nav">

					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						 <div class="navbar-brand logo-nav-left ">
							<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="index.php">Perk<span>Jet</span></a></h1>
						</div>

					</div>
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php" class="act">Home</a></li>
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">4 Wheelers <b class="caret"></b></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Companies</h6>

												<li><a href="products.php">Rolls Royce </a></li>
												<li><a href="products.php">BMW </a></li>
												<li><a href="products.php">Jaguar </a></li>
                        <li><a href="products.php">Mercedes-Benz </a></li>
												<li><a href="products.php">Audi </a></li>

											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Types</h6>
												<li><a href="products.php">Hatchback</a></li>
												<li><a href="products.php">Sedans</a></li>
												<li><a href="products.php">MUV</a></li>
												<li><a href="products.php">Convertible</a></li>
												<li><a href="products.php">Hybrid</a></li>
												<li><a href="products.php">Coupe</a></li>

											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Price Range</h6>
												<li><a href="products.php">20 lakhs - 50 lakhs</a></li>
												<li><a href="products.php">50 lakhs - 1 Cr</a></li>
												<li><a href="products.php">Above 1 Cr</a></li>

											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="row-top">
										<div class="col-sm-6 row1">
											<a href="products.php"><img src="images/me.jpg" alt="" class="img-responsive"></a>
										</div>
										<div class=" col-sm-6 row2">
											<a href="products.php"><img src="images/me1.jpg" alt="" class="img-responsive"></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">2 wheelers <b class="caret"></b></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Companies</h6>

												<li><a href="products1.php">Herley Davidson </a></li>
												<li><a href="products1.php">Royal Enfield </a></li>
												<li><a href="products1.php">Honda </a></li>
												<li><a href="products1.php">Kawasaki </a></li>

											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Types</h6>
												<li><a href="products1.php">Street</a></li>
												<li><a href="products1.php">Mountain</a></li>
												<li><a href="products1.php">Hybrid</a></li>
												<li><a href="products1.php">BMX</a></li>

											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Price</h6>
												<li><a href="products1.php">40 Thousand - 1 Lakhs</a></li>
												<li><a href="products1.php">1 lakhs - 5 lakhs</a></li>
												<li><a href="products1.php">5 lakhs and Above</a></li>

											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="row-top">
										<div class="col-sm-6 row1">
											<a href="products1.php"><img src="images/me2.jpg" alt="" class="img-responsive"></a>
										</div>
										<div class=" col-sm-6 row2">
											<a href="products1.php"><img src="images/me3.jpg" alt="" class="img-responsive"></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>

							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
					</nav>
				</div>

		</div>
	</div>
<!-- //header -->
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Contact</h2>
		<h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="index.php">Home</a><label>/</label>Contact</h3>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- contact -->
	<div class="contact">
		<div class="container">

			<div class="col-md-8 contact-grids1 animated wow fadeInRight" data-wow-delay=".5s">
				<form method="post" action="cont.php">
						<div class="contact-form2">
							<h4>Name</h4>

								<input type="text" name="name" placeholder="" required="">

						</div>
						<div class="contact-form2">
							<h4>Email</h4>

								<input type="email" name="email" placeholder="" required="">

						</div>
						<div class="contact-form2">
							<h4>Subject</h4>

								<input type="text" name="subject" placeholder="" required="">

						</div>


				<div class="contact-me ">
					<h4>Message</h4>

						<textarea type="text" name="message" placeholder="" required=""> </textarea>
						</div>
						<input type="submit" name="submit" value="Submit" >
				</form>

			</div>

			<div class="col-md-4 contact-grids">
				<div class=" contact-grid animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="contact-grid1">
						<div class="contact-grid2 ">
							<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
						</div>
						<div class="contact-grid3">
							<h4>Address</h4>
							<p>204 Rodriguez Villa, Kamani, Kurla (W) <span>Mumbai.</span></p>
						</div>
					</div>
				</div>
				<div class=" contact-grid animated wow fadeInUp" data-wow-delay=".5s">
					<div class="contact-grid1">
						<div class="contact-grid2 contact-grid4">
							<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
						</div>
						<div class="contact-grid3">
							<h4>Call Us</h4>
							<p>+1234 758 839<span>+1273 748 730</span></p>
						</div>
					</div>
				</div>
				<div class=" contact-grid animated wow fadeInRight" data-wow-delay=".5s">
					<div class="contact-grid1">
						<div class="contact-grid2 contact-grid5">
							<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
						</div>
						<div class="contact-grid3">
							<h4>Email</h4>
							<p><a href="contactto:info@example.com">perkjet143@gmail.com</a></p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="map">
		<iframe class="animated wow fadeInLeft" data-wow-delay=".5s" src="https://www.google.com/maps/d/embed?mid=1oEUvtsdtUxhAELbP_ZJ5FycH-j0&hl=en_US" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div >
<!-- //contact -->
<div class="social animated wow fadeInUp" data-wow-delay=".1s">
	<div class="container">
		<div class="col-sm-3 social-ic">
			<a href="#">FACEBOOK</a>
		</div>
		<div class="col-sm-3 social-ic">
			<a href="#">TWITTER</a>
		</div>
		<div class="col-sm-3 social-ic">
			<a href="#">GOOGLE+</a>
		</div>
		<div class="col-sm-3 social-ic">
			<a href="#">PINTEREST</a>
		</div>
	<div class="clearfix"></div>
	</div>
</div>

<!-- footer -->
	<div class="footer">
		<div class="container">
		<div class="footer-top">
		<div class="col-md-9 footer-top1">
		<h4>The vehicles we own, tell a lot about us!</h4>
		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.Excepteur sint occaecat cupidatat
						non proident Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
		</div>
		<div class="col-md-3 footer-top2">
		<a href="contact.php">Contact Us</a>
		</div>
		<div class="clearfix"> </div>
		</div>
			<div class="footer-grids">
				<div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".5s">
					<h3>About Us</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat
						non proident, sunt in culpa qui officia deserunt mollit.</span></p>
				</div>
				<div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".6s">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" ></i>204, Rodriguez Villa, Kamani, Kurla(W) <span>Mumbai.</span></li>
						<li class="foot-mid"><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:info@example.com">perkjet143@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" ></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".7s">
				<h3>Sign up for newsletter </h3>
				<form>
					<input type="text" placeholder="Email"  required="">
					<input type="submit" value="Submit">
				</form>

				</div>

				<div class="clearfix"> </div>
			</div>

			<div class="copy-right animated wow fadeInUp" data-wow-delay=".5s">
				<p>&copy 7X. All rights reserved | Design by <a href="#">Team Angaar</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>
