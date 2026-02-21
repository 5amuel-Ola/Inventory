<h2>Enter New Shirt Type Information</h2>
<form name="newshirttype" action="index.php" method="post">
   <table>
       <tr>
           <td>Shirt Type ID:</td>
           <td><input type="number" name="ShirtTypeID" size="4" min="100" max="999" required></td>
       </tr>
       <tr>
           <td>Shirt Type Code:</td>
           <td><input type="text" name="ShirtTypeCode" size="20" placeholder="XXX" minlength="3" required></td>
       </tr>
       <tr>
           <td>Shirt Type Name:</td>
           <td><input type="text" name="ShirtTypeName" size="50" required></td>
       </tr>
       <tr>
           <td>Shirt Aisle:</td>
           <td><input type="text" name="ShirtAisle" size="50" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Shirt Type">
   <input type="hidden" name="content" value="addshirttype">
</form>