<?php
include ("dbconnect.php");
$url=$_POST['URL'];
$range=$_POST['range'];
$cat=$_POST['catagory'];
echo "New Wishlist".$url."<br>";
echo $range."<br>";
echo $cat."<br>";

?>