
<?php include("../common/header.html") ?>

<!-- view_products.php -->

<body>
	<div id="outer">
<?php 
include("../common/banner.php");
include("../common/menu.html");
?>
<div class="body">
<?php

//query dastabase
$con = mysql_connect("localhost", "csc35509", "kuAccerg");
if(!$con)
{
	die("Could not connect: " . mysql_error());
}
$category = $_GET['category'];
//$category = stripslashes($category);

mysql_select_db(csc35509, $con) or die(mysql_error());

$result = mysql_query("SELECT * FROM my_products
WHERE product_type='$category'") or die("could not query: " . mysql_error());

// output title
if($category == "Armor" || $category == "Clothing")
{
	echo "<div class=\"body\"><h1>List of " . $category . "</h1><br />";
}
else if($category == "Accessory")
{
	echo "<div class=\"body\"><h1>List of Accessories</h1><br />";
}
else 
{
	echo "<div class=\"body\"><h1>List of " . $category . "s</h1><br />";
}

//output products
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Description</th>
<th>Price</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['description'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "</tr>";
  }
echo "</table></div>";

mysql_close($con);

?>		
</div>

	</div>	
<?php include("../common/footer.html"); ?>
