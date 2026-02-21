<?php
if (!isset($_REQUEST['ShirtTypeID']) or (!is_numeric($_REQUEST['ShirtTypeID']))) {
?>
 <h2>You did not select a valid Shirt Type ID to view.</h2>
 <a href="index.php?content=listshirttypes">List Shirt Types</a>
 <?php
} else {
 $ShirtTypeID = $_REQUEST['ShirtTypeID'];
 $shirtType = ShirtType::findShirtType($ShirtTypeID);
 if ($shirtType) {
   echo $shirtType;
   $shirts = Shirt::getShirtsByShirtType($ShirtTypeID);
   if ($shirts) {
 ?>
     <br><br>
     <b>Shirts:</b><br>
     <table>
       <tr>
         <th>Shirt</th>
         <th>Shirt Code</th>
         <th>Shirt Name</th>
         <th>Shirt Description</th>
         <th>Shirt Season</th>
         <th>Shirt Size</th>
         <th>Shirt Wholesale Price</th>
         <th>Shirt List Price</th>
       </tr>
       <?php
       $shirttotal = 0;
       foreach ($shirts as $shirt) {
       ?>
         <tr>
           <td><?php echo $shirt->ShirtID; ?></td>
           <td><?php echo $shirt->ShirtCode; ?></td>
           <td><?php echo $shirt->ShirtName; ?></td>
           <td><?php echo $shirt->ShirtDescription; ?></td>
           <td><?php echo $shirt->ShirtSeason; ?></td>
           <td><?php echo $shirt->ShirtSize; ?></td>
           <td><?php echo $shirt->ShirtTypeID; ?></td>
           <td><?php echo $shirt->ShirtWholesalePrice; ?></td>
           <td><?php echo $shirt->ShirtListPrice; ?></td>
         </tr>
       <?php
         $shirttotal = $shirttotal + $shirt->ShirtWholesalePrice;
         //$shirttotals = $shirttotals + $shirt->ShirtListPrice;
       }
       ?>
       <!-- <tr>
         <td></td>
         <td>Whole Sale Total</td>
         <td><?php echo '$' . number_format($shirttotal, 2); ?></td>
       </tr> -->
     </table>
<?php
   } else {
     echo "<h2>There are no shirts for this shirt type</h2>\n";
   }
 } else {
   echo "<h2>Sorry, Shirt Type $ShirtTypeID not found</h2>\n";
 }
}
?>
