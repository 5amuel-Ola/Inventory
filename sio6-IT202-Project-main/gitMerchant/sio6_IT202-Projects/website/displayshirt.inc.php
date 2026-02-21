<?php
if (!isset($_REQUEST['ShirtID']) or (!is_numeric($_REQUEST['ShirtID']))) {
?>
 <h2>You did not select a valid Shirt ID to view.</h2>
 <a href="index.php?content=listshirt">List Shirts</a>
<?php
} else {
 $ShirtID = $_REQUEST['ShirtID'];
 $shirt = Shirt::findShirt($ShirtID);
 if ($shirt) {
   echo $shirt;
   echo "<br><a href='index.php?content=listshirt'>Back to Shirt List</a>";
 } else {
   echo "<h2>Sorry, Shirt $ShirtID not found</h2>\n";
   echo "<a href='index.php?content=listshirt'>List Shirts</a>";
 }
}
?>