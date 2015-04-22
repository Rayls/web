<?php
// lisyProductsByCat.php

//query dastabase
$con = mysql_connect("localhost", "csc35509", "kuAccerg");
if(!$con)
{
	die("Could not connect: " . mysql_error());
}
$category = $_POST['category'];
//$category = stripslashes($category);

mysql_select_db(csc35509, $con) or die(mysql_error());

$result = mysql_query("SELECT * FROM my_products
WHERE product_type='$category'") or die("could not query: " . mysql_error());

//print query

while($row = mysql_fetch_array($result))
{
	echo "<option>".$row['name']."  ".$row['price']."</option>";
}
?>