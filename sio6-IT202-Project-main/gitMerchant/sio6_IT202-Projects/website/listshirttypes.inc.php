<!-- 
Name: Samuel Olagoke
Date: October 17, 2025
Course: IT202-003
Assignment: Phase02
Email: sio6@njit.edu -->

<script>
    function selectFirstShirtType() {
        const select = document.querySelector('select[name = "ShirtTypeID"]');
        if (select && select.options.length > 0) {
            select.selectedIndex = 0;
        }
    }
selectFirstShirtType();
</script>

<script language="javascript">
   function listbox_dblclick() {
       document.shirttypes.displayshirttype.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this shirt type?");
       }
       if (userConfirmed) {
           if (target == 0) document.shirttypes.action = "index.php?content=displayshirttype";
           if (target == 1) document.shirttypes.action = "index.php?content=removeshirttype";
           if (target == 2) document.shirttypes.action = "index.php?content=updateshirttype";
           document.shirttypes.submit();
       } else {
           alert("Action canceled.");
           return false;
       }
   }
</script>

<?php
require_once("shirttype.php");
$shirtTypes = ShirtType::getShirtTypes();
if ($shirtTypes) {
?>
 <h2>Select Shirt Type</h2>
  <form name="shirttypes" method="post">
   <select ondblclick="listbox_dblclick()" name="ShirtTypeID" size="20">
       <?php
         foreach($shirtTypes as $shirtType) {
            $ShirtTypeID = $shirtType->ShirtTypeID;
            $name = $ShirtTypeID . " - " . $shirtType->ShirtTypeCode . ", " . $shirtType->ShirtTypeName;
            echo "<option value=\"$ShirtTypeID\">$name</option>\n";
         }
         ?>
         </select>
         <br>
         <input type="submit" onClick="button_click(0)" name="displayshirttype" value="Display Shirt Type">
         <input type="submit" onClick="button_click(1)" name="deleteshirttype" value="Delete Shirt Type">
        <input type="submit" onClick="button_click(2)" name="updateshirttype" value="Update Shirt Type">
  </form>
<?php
} else {
  echo "<h2>No Shirt Type found.</h2>";
}
?>