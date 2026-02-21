<?php
error_log("\$_POST " . print_r($_POST, true));
require_once("shirttype.php");
if (isset($_SESSION['login']))
{
   $ShirtTypeID = $_POST['ShirtTypeID'];
   $shirtType = ShirtType::findShirtType($ShirtTypeID);
   $result = $shirtType->removeShirtType();
   if ($result)
      echo "<h2>Shirt Type $ShirtTypeID removed</h2>\n";
   else
      echo "<h2>Sorry, problem removing shirt type $ShirtTypeID</h2>\n";
} else {
   echo "<h2>Please log in first</h2>\n";
}
?>