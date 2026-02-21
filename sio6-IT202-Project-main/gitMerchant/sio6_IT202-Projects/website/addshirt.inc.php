<!-- 
Name: Samuel Olagoke
Date: October 17, 2025
Course: IT202-003
Assignment: Phase02
Email: sio6@njit.edu -->
<?php
require_once('shirt.php');
if (isset($_SESSION['login'])){
        $ShirtID = $_POST['ShirtID'];
        if ((trim($ShirtID) == '') or (!is_numeric($ShirtID))) {
        echo "<h2>Sorry, you must enter a valid Shirt ID number</h2>\n";
        } else {
            $ShirtID = $_POST['ShirtID'];
            $ShirtCode = $_POST['ShirtCode'];
            $ShirtName = $_POST['ShirtName'];
            $ShirtDescription = $_POST['ShirtDescription'];
            $ShirtSeason = $_POST['ShirtSeason'];
            $ShirtSize = $_POST['ShirtSize'];
            $ShirtTypeID = $_POST['ShirtTypeID'];
            $ShirtWholesalePrice = $_POST['ShirtWholesalePrice'];
            $ShirtListPrice = $_POST['ShirtListPrice'];
            $Shirt = new Shirt(
                    $ShirtID,
                    $ShirtCode,
                    $ShirtName,
                    $ShirtDescription,
                    $ShirtSeason,
                    $ShirtSize,
                    $ShirtTypeID,
                    $ShirtWholesalePrice,
                    $ShirtListPrice
            );
            $result = $Shirt->saveShirt();
            if ($result)
                echo "<h2>New Shirt #$ShirtID successfully added</h2>\n";
            else
                echo "<h2>Sorry, there was a problem adding that Shirt</h2>\n";
            }
} else {
   echo "<h2>Please login first</h2>\n";
}
?>
