<?php

// Author: Glavin Wiechert
// Description: Automatically adjusts the base tag for CSCI 2355 webpages.

// base.php
echo "<!-- base.php -->";
echo '<meta http-equiv="content-type" content="text/html; charset=UTF-8" />';

// Directory of this base.php file. Should be either at top directory of website, ./submission09/base.php, or within the common directory, ./submission09/common/base.php
$dir=dirname(__FILE__); // Solution!

// Get rid of 'public_html' directory and all of it's parent directories.
$parentdir='/public_html/';
list($begin, $end)=explode($parentdir, $dir);

// Get rid of the 'common' directory, for which this base.php resides.
$subdir='/common';
list($middle, $end)=explode($subdir, $end);

// return current working directory
$bDir=$middle;
echo '<base href="http://cs.smu.ca/~csc35523/'.$bDir.'/" />';

// Debugging
//echo "<title>".$bDir."</title>";

?>
