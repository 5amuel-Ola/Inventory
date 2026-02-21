<!-- 
Name: Samuel Olagoke
Date: October 17, 2025
Course: IT202-003
Assignment: Phase02
Email: sio6@njit.edu -->
<?php
require_once("shirt.php");
$ShirtID = $_POST['ShirtID'];
$shirt = Shirt::findShirt($ShirtID);
$shirt->ShirtID = $_POST['ShirtID'];
$shirt->ShirtCode = $_POST['ShirtCode'];
$shirt->ShirtName = $_POST['ShirtName'];
$shirt->ShirtDescription = $_POST['ShirtDescription'];
$shirt->ShirtSeason = $_POST['ShirtSeason'];
$shirt->ShirtSize = $_POST['ShirtSize'];
$shirt->ShirtTypeID = $_POST['ShirtTypeID'];
$shirt->ShirtWholesalePrice = $_POST['ShirtWholesalePrice'];
$shirt->ShirtListPrice = $_POST['ShirtListPrice'];
$result = $shirt->updateShirt();
if ($result) {
   echo "<h2>Shirt $ShirtID updated</h2>\n";
} else {
   echo "<h2>Problem updating Shirt $ShirtID</h2>\n";
}
?>
