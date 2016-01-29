<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

<?php
$hostname = "artacre.db.10635241.hostedresource.com";
$username = "artacre";
$password = "Bayou!5246";
$dbname = "artacre";
$usertable = "products";
$yourfield = "name";

$mysqli = new mysqli($hostname, $username, $password, $dbname);


$con = mysqli_connect($hostname, $username, $password, $dbname) or die ("<html><script language='JavaScript'>
alert('Unable to connect to database! Please try again later.'))</script></html>");


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

// Allow certain file formats
if($imageFileType != "csv" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
   
        $droprawtable = "drop table if exists products;";
        $mysqli->query($droprawtable);
        $createrawtable =
        "CREATE TABLE  products (
            `Id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
             `Category` VARCHAR( 55 ) NOT NULL ,
             `Name` VARCHAR( 45 ) NOT NULL ,
             `Description` VARCHAR( 150 ) NOT NULL ,
             `Price` VARCHAR( 45 ) NOT NULL ,
            PRIMARY KEY (  `Id` )
            ) ENGINE = MYISAM DEFAULT CHARSET = latin1; ";
        $mysqli->query($createrawtable);
    
        $downloadedcsvfile = fopen($target_file,"r");
            if ($downloadedcsvfile){
                $skipfirstline = true;
                //echo "[" .getmypid() . "] [" . date('m/d/Y H:i:s') . "] Started CSV Import \n";
                while (($data = fgetcsv($downloadedcsvfile, 50000, "," )) !== FALSE ){    //echo "<pre>"; print_r($data);die;
                    if($skipfirstline) { $skipfirstline = false; continue; }
                     $import="INSERT INTO products (Category , Name , Description , Price)
                            values(
                            '".$mysqli->real_escape_string($data[0])."',
                            '".$mysqli->real_escape_string($data[1])."',
                            '".$mysqli->real_escape_string($data[2])."',
                            '".$mysqli->real_escape_string($data[3])."'
                           ); ";
                    $mysqli->query($import);

                }
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>