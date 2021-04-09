<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale="1.0">
	<title>All Products - Online Stationery Management</title>
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
	</div>
<div class="small-container">
	<div class="row-2">
		<h2 style="margin-bottom: 15px">All Products(Page:-02)</h2>
		<select>
			<option>Default Sorting</option>
			<option>Sort by Price</option>
			<option>Sort by Popularity</option>
			<option>Sort by Rating</option>
			<option>Sort by Sale</option>
		</select>
	</div>
		<div class="row">
				<div class="col-4">
					<img src="images/offer.png">
					<h4>Note Pad with Sticky Notes & Clip Holder with Pen</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>&#x20b9; 450</p>
				</div>
				<div class="col-4">
					<img src="images/product-13.png">
					<h4>Classmate Octane colour gel pens </h4>
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
					<img src="images/product-14.png">
					<h4>Scientific Calculator</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>&#x20b9; 1,100</p>
				</div>
				<div class="col-4">
					<img src="images/product-15.jpg">
					<h4>Classmate Octane neon gel pen</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>&#x20b9; 50</p>
				</div>
		</div>
				<div class="row">
				<div class="col-4">
					<img src="images/product-16.jpg">
					<h4>Classmate Stationery Kit</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>&#x20b9; 550</p>
				</div>
				<div class="col-4">
					<img src="images/product-17.jpg">
					<h4>School/College Bag</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>&#x20b9; 1,200</p>
				</div>
				<div class="col-4">
					<img src="images/product-18.jpg">
					<h4>Simple Calculator</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>&#x20b9; 350</p>
				</div>
				<div class="col-4">
					<img src="images/product-19.jpg">
					<h4>Classmate Erasers(pack of 5)</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>&#x20b9; 20</p>
				</div>
		</div>
				<div class="row">
				<div class="col-4">
					<img src="images/product-20.jpg">
					<h4>Classmate Sharpeners(pack of 5)</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>&#x20b9; 20</p>
				</div>
				<div class="col-4">
					<img src="images/product-22.jpg">
					<h4>Multipurpose Scissors</h4>
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
					<img src="images/product-21.jpg">
					<h4>Paper Clips</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>&#x20b9; 10</p>
				</div>
				<div class="col-4">
					<img src="images/product-23.jpg">
					<h4>Camlin Student Poster Colours</h4>
					<div class="ratings">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>&#x20b9; 200</p>
				</div>
		</div>
				
		<div class="page-btn">
			<a href="products.php">1</a>
			<a href="products_page2.php">2</a>
			<span>&#8594;</span>
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