<!-- 
Name: Samuel Olagoke
Date: October 17, 2025
Course: IT202-003
Assignment: Phase02
Email: sio6@njit.edu -->
<?php
require_once("shirttype.php");
$ShirtTypeID = $_POST['ShirtTypeID'];
$shirtType = ShirtType::findShirtType($ShirtTypeID);
$shirtType->ShirtTypeID = $_POST['ShirtTypeID'];
$shirtType->ShirtTypeCode = $_POST['ShirtTypeCode'];
$shirtType->ShirtTypeName = $_POST['ShirtTypeName'];
$shirtType->ShirtAisle = $_POST['ShirtAisle'];
$result = $shirtType->updateShirtType();
if ($result) {
   echo "<h2>Shirt Type  $ShirtTypeID updated</h2>\n";
} else {
   echo "<h2>Problem updating shirt Type $ShirtTypeID</h2>\n";
}
?>
