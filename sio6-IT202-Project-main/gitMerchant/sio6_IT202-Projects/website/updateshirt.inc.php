<?php
if (!isset($_POST['ShirtID']) or (!is_numeric($_POST['ShirtID']))) {
?>
   <h2>You did not select a valid ShirtID value</h2>
   <a href="index.php?content=listshirt">List Shirts</a>
   <?php
} else {
   $ShirtID = $_POST['ShirtID'];
   $shirt = Shirt::findShirt($ShirtID);
   if ($shirt) {
   ?>
       <h2>Update Shirt <?php echo $shirt->ShirtID; ?></h2><br>
       <form name="shirts" action="index.php" method="post">
           <table>
               <tr>
                   <td>Shirt ID</td>
                   <td><?php echo $shirt->ShirtID; ?></td>
               </tr>
               <tr>
                   <td>Shirt Code</td>
                   <td><input type="text" name="ShirtCode" value="<?php echo $shirt->ShirtCode; ?>"></td>
               </tr>
               <tr>
                   <td>Shirt Name</td>
                   <td><input type="text" name="ShirtName" value="<?php echo $shirt->ShirtName; ?>"></td>
               </tr>
               <tr>
                   <td>Shirt Description</td>
                   <td><input type="text" name="ShirtDescription" value="<?php echo $shirt->ShirtDescription; ?>"></td>
               </tr>
               <tr>
                   <td>Shirt Season</td>
                   <td><input type="text" name="ShirtSeason" value="<?php echo $shirt->ShirtSeason; ?>"></td>
               </tr>
               <tr>
                   <td>Shirt Size</td>
                   <td><input type="text" name="ShirtSize" value="<?php echo $shirt->ShirtSize; ?>"></td>
               </tr>
               <tr>
                   <td>Shirt Type ID</td>
                   <td><input type="text" name="ShirtTypeID" value="<?php echo $shirt->ShirtTypeID; ?>"></td>
               </tr>
               <tr>
                   <td>Shirt Wholesale Price</td>
                   <td><input type="text" name="ShirtWholesalePrice" value="<?php echo $shirt->ShirtWholesalePrice; ?>"></td>
               </tr>
               <tr>
                   <td>Shirt List Price</td>
                   <td><input type="text" name="ShirtListPrice" value="<?php echo $shirt->ShirtListPrice; ?>"></td>
               </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update Shirt">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="ShirtID" value="<?php echo $ShirtID; ?>">
           <input type="hidden" name="content" value="changeshirt">
       </form>
   <?php
   } else {
   ?>
       <h2>Sorry, Shirt <?php echo $ShirtID; ?> not found</h2>
       <a href="index.php?content=listshirt">List Shirts</a>
<?php
   }
}
?>
