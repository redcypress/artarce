<?php 

$hostname = "artacre.db.10635241.hostedresource.com";
$username = "artacre";
$password = "Bayou!5246";
$dbname = "artacre";
$usertable = "products";
$yourfield = "name";


$mysqli = new mysqli($hostname, $username, $password, $dbname);


mysqli_connect($hostname, $username, $password) or die ("<html><script language='JavaScript'>


alert('Unable to connect to database! Please try again later.'))</script></html>");

$query = "SELECT * from products";
/* return name of current default database */
if ($result = $mysqli->query($query)) {
     foreach ($mysqli->query($query) as $row) {
        echo $row['Name'] . $row['price'] . '<br>';
     }
}

# Check If Record Exists
#$query = "SELECT * FROM $usertable";
#$result = mysqli_query($query);
#if($result){  while($row = mysqli_fetch_array($result))  {    $name = $row["$yourfield"];    echo "Name: ".$name."<br>";  }}?>
