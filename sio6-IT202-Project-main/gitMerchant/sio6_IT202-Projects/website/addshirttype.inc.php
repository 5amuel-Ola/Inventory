<!-- 
Name: Samuel Olagoke
Date: October 17, 2025
Course: IT202-003
Assignment: Phase02
Email: sio6@njit.edu -->
<?php
require_once("shirttype.php");
if (isset($_SESSION['login'])) {
    $ShirtTypeID = filter_input(INPUT_POST, 'ShirtTypeID', FILTER_VALIDATE_INT);
    if ((trim($ShirtTypeID) == '') or (!is_int($ShirtTypeID))) {
      echo "<h2>Sorry, you must enter a valid shirt type ID number</h2>\n";
    } else if (ShirtType::findShirtType($ShirtTypeID)){
    echo "<h2>Sorry, A Shirt Type with the ID #$ShirtTypeID already exists</h2>\n";
   } else {
    $ShirtTypeCode = htmlspecialchars($_POST['ShirtTypeCode']);
    $ShirtTypeName = htmlspecialchars($_POST['ShirtTypeName']);
    $ShirtAisle = $_POST['ShirtAisle'];
    $shirtType = new ShirtType($ShirtTypeID, $ShirtTypeCode, $ShirtTypeName, $ShirtAisle);
    $result = $shirtType->saveShirtType();
    if ($result) {
        echo "<h2>New Shirt #$ShirtTypeID successfully added</h2>\n";
    } else {
        echo "<h2>Sorry, there was a problem adding that shirt </h2>\n";
    }
  }
 } else {
    echo "<h2>Please log in first</h2>\n";
  }
?>
