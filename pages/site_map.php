<?php include("../common/header.html") ?>

<!-- site_map.php -->

<body>
	<div id="outer">
<?php 
include("../common/banner.php");
include("../common/menu.html");
?>
		<div class="body">
			<ol>
				<li><h3><a href="my_business.php">Home</a></h3></li>
				<li><h3><a href="pages/product_list.php">Products</a></h3>
					<ul>
						<li><a href="pages/view_products.php?category=Firearm">Firearms</a></li>
						<li><a href="pages/view_products.php?category=Sword">Swords</a></li>
						<li><a href="pages/view_products.php?category=Armor">Armor</a></li>
						<li><a href="pages/view_products.php?category=Clothing">Clothing</a></li>
						<li><a href="pages/view_products.php?category=Accessory">Accessories</a></li>
					</ul>	
				</li>
				<li><h3><a href="pages/buynow.php">Buy Now</a></h3></li>
				<li><h3><a href="pages/services.php">Services</a></h3>
					<ul>
						<li><a href="pages/consult.php">Consultation</a></li>
						<li><a href="pages/fabrication.php">Fabrication</a></li>
						<li><a href="pages/living_history.php">Living History</a></li>
					</ul>
				</li>
				<li><h3><a href="pages/contact.php">Contact Us</a></h3>
					<ul>
						<li><a href="pages/feedback.php">Feedback</a></li>
					</ul>
				</li>
				<li><h3><a href="pages/site_map">Site Map</a></h3></li>
			</ol>
		</div>
		<div class="image" style="margin-left: 200px">
			<img src="images/sword.jpg" alt="Image not available" />
		</div>
		</div>
		<?php include("../common/footer.html"); ?>
		
