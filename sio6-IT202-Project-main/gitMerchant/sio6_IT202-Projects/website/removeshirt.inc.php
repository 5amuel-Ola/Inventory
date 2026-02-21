<!-- 
Name: Samuel Olagoke
Date: October 17, 2025
Course: IT202-003
Assignment: Phase02
Email: sio6@njit.edu -->
<?php
require_once("shirt.php");
if (isset($_SESSION['login'])) {
    $ShirtID = $_POST['ShirtID'];
    $shirt = Shirt::findShirt($ShirtID);
    if ($shirt) {
        $result = $shirt->removeShirt();
        if ($result)
           echo "<h2>Shirt $ShirtID removed</h2>\n";
        else
           echo "<h2>Sorry, problem removing shirt $ShirtID</h2>\n";
    } else {
        echo "<h2>Shirt $ShirtID not found</h2>\n";
    }
} else {
   echo "<h2>Please log in first</h2>\n";
}
?>