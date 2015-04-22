<?php
//query dastabase
$con = mysql_connect("localhost", "csc35509", "kuAccerg");
if(!$con)
{
	die("Could not connect: " . mysql_error());
}

mysql_select_db(csc35509, $con) or die(mysql_error());

$result = mysql_query("SELECT * FROM my_products") or die("could not query: " . mysql_error());

//output
echo "<select name=\"product\">";
echo "<option>-- None --</option>";
while($row = mysql_fetch_array($result))
  {
  	echo "<option>" . $row['name'] . "</option>";
  }
echo "</select>";

//close connection
mysql_close($con);
?>