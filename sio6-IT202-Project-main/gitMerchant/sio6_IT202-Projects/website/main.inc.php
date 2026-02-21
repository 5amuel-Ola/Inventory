<!-- 
Name: Samuel Olagoke
Date: October 3, 2025
Course: IT202-003
Assignment: Phase01
Email: sio6@njit,edu -->
<style>
 form[name="login"] {
   display: grid;
   grid-template-columns: 100px 1fr;
   gap: 10px 5px;
   align-items: center;
   max-width: 300px;
 }
 form[name="login"] label {
   text-align: right;
   padding-right: 5px;
 }
 form[name="login"] input[type="text"],
 form[name="login"] input[type="password"] {
   width: 100%;
 }
 form[name="login"] input[type="submit"] {
   grid-column: 2;
   justify-self: start;
 }
</style>

<?php
if (!isset($_SESSION['login'])) {
?>
  <h2>Please Login to the Shirt Store Inventory Website</h2><br>
  <form name="login" action="index.php" method="post">
    <label>Email:</label>
    <input type="text" name="emailAddress" size="20">

    <label>Password:</label>
    <input type="password" name="password" size="20">

    <input type="submit" value="Login">
    <input type="hidden" name="content" value="validate">
  </form>
<?php
} else {
   echo "<h2>Welcome to Inventory Helper for Shirt Store, {$_SESSION['firstName']} {$_SESSION['lastName']} {$_SESSION['pronouns']}</h2>";
?>
   <br><br>
   <p>This program tracks Type and Shirt inventory</p>
   <p>Please use the links in the navigation window</p>
   <p>Please DO NOT use the browser navigation buttons!</p>
   <a href="index.php?content=logout"><strong>Logout</strong></a>
<?php
}
?>