<?php 

$hostname = "artacre.db.10635241.hostedresource.com";
$username = "artacre";
$password = "Bayou!5246";
$dbname = "artacre";
$usertable = "products";
$yourfield = "name";

mysqli_connect($hostname, $username, $password) or die ("<html><script language='JavaScript'>


alert('Unable to connect to database! Please try again later.'))</script></html>");

mysqli_select_db($dbname);

# Check If Record Exists
$query = "SELECT * FROM $usertable";
$result = mysqli_query($query);
if($result){  while($row = mysqli_fetch_array($result))  {    $name = $row["$yourfield"];    echo "Name: ".$name."<br>";  }}?>
