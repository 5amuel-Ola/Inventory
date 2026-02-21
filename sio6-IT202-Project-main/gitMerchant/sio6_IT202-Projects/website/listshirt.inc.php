<!-- 
Name: Samuel Olagoke
Date: October 17, 2025
Course: IT202-003
Assignment: Phase02
Email: sio6@njit.edu -->
<script language="javascript">
   function listbox_dblclick() {
       document.shirts.displayshirt.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this shirt?");
       }
       if (userConfirmed) {
           if (target == 0) document.shirts.action = "index.php?content=displayshirt";
           if (target == 1) document.shirts.action = "index.php?content=removeshirt";
           if (target == 2) document.shirts.action = "index.php?content=updateshirt";
           document.shirts.submit();
       } else {
           alert("Action canceled.");
           return false;
       }
   }
</script>

<?php
require_once("shirt.php");
$Shirts = Shirt::getShirts();  // Changed variable name to avoid conflict
if ($Shirts) {
?>
 <h2>Select Shirt</h2>
  <form name="shirts" method="post">
   <select ondblclick="listbox_dblclick()" name="ShirtID" size="20">
       <?php
         foreach ($Shirts as $shirt) {  // Now using different names
            $ShirtID = $shirt->ShirtID;
            $ShirtCode = $shirt->ShirtCode;
            $ShirtName = $shirt->ShirtName;
            $ShirtDescription = $shirt->ShirtDescription;
            $ShirtSeason = $shirt->ShirtSeason;
            $ShirtSize = $shirt->ShirtSize;
            $ShirtTypeID = $shirt->ShirtTypeID;
            $ShirtWholesalePrice = $shirt->ShirtWholesalePrice;
            $ShirtListPrice = $shirt->ShirtListPrice;
            $option = $ShirtID . " - " . $ShirtCode . ", " . $ShirtName . 
                     " (" . $ShirtDescription . "), " . $ShirtSeason . ", " . 
                     $ShirtSize . ", Type ID: " . $ShirtTypeID . 
                     ", Wholesale: $" . $ShirtWholesalePrice . 
                     ", List: $" . $ShirtListPrice;
            echo "<option value=\"$ShirtID\">$option</option>\n";
         }
         ?>
   </select>
   <br>
   <input type="submit" onClick="button_click(0)" name="displayshirt" value="Display Shirt">
   <input type="submit" onClick="button_click(1)" name="deleteshirt" value="Delete Shirt">
   <input type="submit" onClick="button_click(2)" name="updateshirt" value="Update Shirt">
  </form>
<?php 
} else {
   echo "<h2>No Shirts Found</h2>";
}
?>