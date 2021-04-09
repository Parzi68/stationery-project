<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale="1.0">
	<title>Online Stationery Management | E-Commerce Website</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="reset.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	        <style>
            <?php include"style.css" ?>
        </style>
</head>
<body>
<div class="header">
	<div class="container">
			<div class="navbar">
				<div class="logo">	
					<img src="images/logo1.png" width="125px" height="125px">
				</div>
			
				<nav>
					<ul id="MenuItems">
						<li><a href="index.php">Home</a></li>
						<li><a href="products.php">Products</a></li>
						<li><a href="">About</a></li>
						<li><a href="">Contact</a></li>
						<?php
							if (isset($_SESSION["useruid"])) {
								echo "<li><a href='profile.php'>Profile Page</a></li>";
								echo "<li><a href='logout.inc.php'>Logout</a></li>";
							}
							else {
								echo "<li><a href='login.php'>Login/Sign up</a></li>";
							}
						?>
					</ul>
				</nav>
				<img src="images/cart.png" height="28px" width="28px">
				<img src="images/menu.png" class="menu-icon" height="25px" width="28px" onclick="menutoggle()">
			</div>
			<div class="row">
				<div class="col-2">
					<h1>The creativity at the station attracts the most!</h1>
					<p>"Whatever you choose for your stationery is your favorite <br> color because it's where you pour your heart out." ~ Mary E. Pearson</p>
					<a href="products.php" class="btn">Explore Now &#8702;</a>
				</div>
				<div class="col-2">
					<img src="images/image1.png">
				</div>
			</div>
	</div>
</div>
<!---------- featured catogories --------->
<div class="categories">
	<div class="small-container">
			<div class="row">
				<div class="col-3">
					<img src="images/categories-1.jpg">
				</div>
				<div class="col-3">
					<img src="images/categories-2.jpg">
				</div>
				<div class="col-3">
					<img src="images/categories-3.jpg">
				</div>
			</div>
	</div>
</div>
<!---------- featured products --------->
<div class="small-container">
	<h2 class="title">Featured Products!</h2>
		<div class="row">
				<div class="col-4">
					<img src="images/product-1.jpg">
					<h4>Rainbow Designed Pencil(Set of 10)</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>&#x20b9; 50</p>
				</div>
				<div class="col-4">
					<img src="images/product-2.jpg">
					<h4>One Hole Punching Machine</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>&#x20b9; 100</p>
				</div>
				<div class="col-4">
					<img src="images/product-3.jpg">
					<h4>Combo of Pen and a diary(Available in different colour)</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>&#x20b9; 230</p>
				</div>
				<div class="col-4">
					<img src="images/product-4.jpg">
					<h4>Eco-Friendly Pencil Colours(Box of 10 colours)</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>&#x20b9; 250</p>
				</div>
		</div>
		<h2 class="title">Latest Products!</h2>
				<div class="row">
				<div class="col-4">
					<img src="images/product-5.jpg">
					<h4>Multi-container Pencil Case</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>&#x20b9; 350</p>
				</div>
				<div class="col-4">
					<img src="images/product-6.jpg">
					<h4>Camlin Highlighters(Pack of 5)</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>&#x20b9; 225</p>
				</div>
				<div class="col-4">
					<img src="images/product-7.jpg">
					<h4>Camlin Gemetry Box</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>&#x20b9; 280</p>
				</div>
				<div class="col-4">
					<img src="images/product-8.jpg">
					<h4>Parker Pen(Classic Gold</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>&#x20b9; 500</p>
				</div>
		</div>
				<div class="row">
				<div class="col-4">
					<img src="images/product-9.jpg">
					<h4>Set of Sketching Accessories</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>&#x20b9; 650</p>
				</div>
				<div class="col-4">
					<img src="images/product-10.jpg">
					<h4>Apsara Platinum Set</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>&#x20b9; 180</p>
				</div>
				<div class="col-4">
					<img src="images/product-11.jpg">
					<h4>Classmate Marvel's Avengers Notebook</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>&#x20b9; 50</p>
				</div>
				<div class="col-4">
					<img src="images/product-12.jpg">
					<h4>Desk Organizer</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>&#x20b9; 480</p>
				</div>
		</div>
</div>
<!---------------Offers----------->
<div class="offer">
	<div class="small-container">
		<div class="row">
			<div class="col-2">
				<img src="images/offer.png" class="offer-img">
			</div>
			<div class="col-2">
				<p>Exclusively Available On This Website!</p>
				<h1>Note Pad with Sticky Notes & Clip Holder with Pen</h1>
				<small>It is a diary style desk organizer,memo note pad with a closed size of 7.5 X 4.5 inch appox.
				It has 3 sizes of sticky note pad & 1 pad of loose sheets with clip holder and a pen</small><br>
				<a href="" class="btn">Buy Now!&#8702;</a>
			</div>
		</div>
	</div>
</div>
<!------------- Brands ------------->
<div class="brands">
	<div class="small-container">
		<div class="row">
			<div class="col-5">
				<img src="images/logo-classmate.png">
			</div>
			<div class="col-5">
				<img src="images/logo-parker.png">
			</div>
			<div class="col-5">
				<img src="images/logo-flair.png">
			</div>
			<div class="col-5">
				<img src="images/logo-camlin.png">
			</div>
			<div class="col-5">
				<img src="images/logo-apsara.jpg">
			</div>
		</div>
	</div>
</div>
<!--------------Footer----------->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3 class="support">Support Us</h3>
				<p>Your Passion is our Satisfaction. <br> We have Strategy for Serving Things Right.</p>
			</div>
			<div class="footer-col-2">
				<img src="images/logo1.png">
				<p>Our Purpose Is To Sustainbly Make <br>the Pleasure and Benefits of Stationery <br>Accessibles to Many. </p>
			</div>
			<div class="footer-col-3">
				<h3 class="links">Useful Links</h3>
				<ul>
					<li>Coupons</li>
					<li>Blog Post</li>
					<li>Return Policy</li>
					<li>Join Affiliate</li>
				</ul>
			</div>
			<div class="footer-col-4">
				<h3 class="links">Follow Us</h3>
				<ul>
					<li>Facebook</li>
					<li>Twitter</li>
					<li>Instagram</li>
					<li>Reddit</li>
				</ul>
			</div>
		</div>
		<hr>
		<p class="copyright">&#169; Copyright 2020 - Smit Anam </p>
	</div>
</div>
<!------------------------ js for toggle menu ----------- ----------->
<script>
	var MenuItems = document.getElementById("MenuItems");
	MenuItems.style.maxHeight="0px";
	function menutoggle() {
		if(MenuItems.style.maxHeight == "0px")
		{
			MenuItems.style.maxHeight = "200px";
		}
		else
		{
			MenuItems.style.maxHeight = "0px";
		}
	}
</script>
</body>
</html>