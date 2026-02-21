<style>
   form[name="shirttype"] {
       display: grid;
       grid-template-columns: 125px 1fr;
       gap: 10px 5px;
       align-items: left;
       max-width: 300px;
       margin: 0px;
   }
   form[name="shirttype"] label {
       text-align: left;
       padding-right: 5px;
   }
   form[name="shirttype"] input[type="text"] {
       width: 100%;
   }
   form[name="shirttype"] input[type="submit"] {
       grid-column: 2;
       justify-self: start;
   }
</style>
<?php
$ShirtTypeID = $_POST['ShirtTypeID'];
$shirttype = ShirtType::findShirtType($ShirtTypeID);
if ($shirttype) {
?>
   <h2>Update Shirt Type <?php echo $ShirtTypeID; ?></h2><br>
   <form name="shirttype" action="index.php" method="post">
       <label for="ShirtTypeCode">Shirt Type Code:</label>
       <input type="text" name="ShirtTypeCode" id="ShirtTypeCode" value="<?php echo $shirttype->ShirtTypeCode; ?>">
       <label for="ShirtTypeName">Shirt Type Name:</label>
       <input type="text" name="ShirtTypeName" id="ShirtTypeName" value="<?php echo $shirttype->ShirtTypeName; ?>">
       <label for="ShirtAisle">Shirt Aisle:</label>
       <input type="text" name="ShirtAisle" id="ShirtAisle" value="<?php echo $shirttype->ShirtAisle; ?>">
       <input type="submit" name="answer" value="Update Shirt Type">
       <input type="submit" name="answer" value="Cancel">
       <input type="hidden" name="ShirtTypeID" value="<?php echo $ShirtTypeID; ?>">
       <input type="hidden" name="content" value="changeshirttype">
   </form>
<?php
} else {
?>
   <h2>Sorry, Shirt Type <?php echo $ShirtTypeID; ?> not found</h2>
   <a href="index.php?content=listshirttypes">List Shirt Types</a>
<?php
}
?>
<script language="javascript">
   document.shirttype.ShirtTypeCode.focus();
   document.shirttype.ShirtTypeCode.select();
</script>