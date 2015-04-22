<?php
/*  listCategories.php  */

//query dastabase
$con = mysql_connect("localhost", "csc35509", "kuAccerg");
if(!$con)
{
	die("Could not connect: " . mysql_error());
}

mysql_select_db(csc35509, $con) or die(mysql_error());

$result = mysql_query("SELECT product_type FROM my_products
GROUP BY product_type") or die("could not query: " . mysql_error());

?>