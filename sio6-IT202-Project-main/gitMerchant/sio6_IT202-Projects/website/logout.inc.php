<!-- 
Name: Samuel Olagoke
Date: October 3, 2025
Course: IT202-003
Assignment: Phase01
Email: sio6@njit,edu -->
<?php
if (isset($_SESSION['login'])) {
   unset($_SESSION['login']);
}
header("Location: index.php");
?>