<?php
$uploaded_photo = $_FILES["photo"]["tmp_name"];


$prodCat = "images";

$dbConn = new PDO ("mysql:host=localhost;dbname=8bit","root","root");

$sql = "UPDATE images SET photo = ? WHERE image_upload = ?";

$dbrs = $dbConn->prepare($sql);

$dbrs->execute(array($uploaded_photo, $prodcat));

$numrow = $dbrs->rowCount();

echo "There are $numrow row(s) affected" , "\n<br>";


?>
