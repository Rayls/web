
<?php include("../common/header.html") ?>

<!-- view_products.php -->

<body>
	<div id="outer">
<?php 
include("../common/banner.php");
include("../common/menu.html");
?>

<?php

echo "<div class=\"body\"><h1> Our Products</h1><br />";
echo "<p>Loyalist Arms has a wide selection of products. <br />
Feel free to browse our products by category.</p>";

include("../scripts/listCategories.php");
echo "<ul>";

while($row = mysql_fetch_array($result))
  {
  	echo "<li><a href=\"pages/view_products.php?category=".$row['product_type']."\">".$row['product_type']."</a></li>";
  }

echo "</ul>";

?>		
	
	</div>
	</div>
		
<?php include("../common/footer.html"); ?>
		
