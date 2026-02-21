<?php
   if (isset($_SESSION['login'])) {
   ?>
    <div class="navigation" style="float: left; height: 100%; min-width: 175px; width: auto;">
      <table width="100%" cellpadding="3">
        <?php
         echo "<td><h3>WELCOME </h3></td>";
         ?>
        <tr>
          <td><img src="images/home.png" alt="Home Icon" width="12" height="12">&nbsp;
            <a href="index.php"><strong>Home</strong></a></td>
        </tr>
        <tr>
          <td><img src="images/shirtcategory.png" alt="Categories Icon" width="12" height="12">&nbsp;
          <strong>Shirt Type</strong></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listshirttypes">
              <strong>List Shirt Type</strong></a></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newshirttype">
              <strong>Add New Shirt Type</strong></a></td>
        </tr>
        <tr>
          <td><strong><img src="images/shirt.png" alt="Categories Icon" width="12" height="12">&nbsp;
          Shirts</strong></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listshirt">
              <strong>List Shirts</strong></a></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newshirt">
              <strong>Add New Shirt</strong></a></td>
        </tr>
        <tr>
          <td>
            <hr />
          </td>
        </tr>
        <tr>
          <td><a href="index.php?content=logout">
                   <img src="images/logout.png" alt="Logout Icon" width="12" height="12">
                   <a href="index.php?content=logout">
              <strong>Logout</strong></a></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>
            <form action="index.php" method="post">
              <label>Search for Shirt:</label><br>
              <input type="text" name="ShirtID" size="14" />
              <input type="submit" value="find" />
              <input type="hidden" name="content" value="updateshirt" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            <form action="index.php" method="post">
              <label>Search for Shirt Type:</label><br>
              <input type="text" name="ShirtTypeID" size="14" />
              <input type="submit" value="find" />
              <input type="hidden" name="content" value="displayshirttype" />
            </form>
          </td>
        </tr>
      </table>
    </div>
  <?php
   }
?>