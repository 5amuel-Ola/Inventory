<h2>Enter New Shirt Information</h2>
<form name="newshirt" action="index.php" method="post">
   <table>
       <tr>
           <td>Shirt ID:</td>
           <td><input type="text" name="ShirtID" size="4"></td>
       </tr>
       <tr>
           <td>Shirt Code:</td>
           <td><input type="text" name="ShirtCode" size="5"></td>
       </tr>
       <tr>
           <td>Shirt Name:</td>
           <td><input type="text" name="ShirtName" size="20"></td>
       </tr>
       <tr>
           <td>Shirt Description:</td>
           <td><input type="text" name="ShirtDescription" size="70"></td>
       </tr>
       <tr>
           <td>Shirt Season:</td>
           <td><input type="text" name="ShirtSeason" size="11"></td>
       </tr>
        <tr>
              <td>Shirt Size:</td>
              <td><input type="text" name="ShirtSize" size="10"></td>
       <tr>
           <td>Shirt Type ID:</td>
           <td><input type="text" name="ShirtTypeID" size="3"></td>
       </tr>
       <tr>
           <td>Whole Sale Price:</td>
           <td><input type="text" name="ShirtWholesalePrice" size="10"></td>
       </tr>
        <tr>
              <td>List Price:</td>
              <td><input type="text" name="ShirtListPrice" size="10"></td>
        </tr>
   </table><br>
   <input type="submit" value="Submit New Shirt">
   <input type="hidden" name="content" value="addshirt">
</form>
