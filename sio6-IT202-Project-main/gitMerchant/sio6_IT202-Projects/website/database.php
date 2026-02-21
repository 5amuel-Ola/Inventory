<!-- 
Name: Samuel Olagoke
Date: October 3, 2025
Course: IT202-003
Assignment: Phase01
Email: sio6@njit,edu -->
<?php
 function getDB() {
   $host = 'sql1.njit.edu';
   $port = 3306;
   $dbname = 'sio6';
   $username = 'sio6';
   $password = 'Ibukunoluwa2007.';
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   try {
       $db = new mysqli($host, $username, $password, $dbname, $port);
       error_log("You are connected to the $host database!");
       //echo "You are connected to the $host database!";
       return $db;
   } catch (mysqli_sql_exception $e) {
       error_log($e->getMessage(), 0);
       //echo $e->getMessage();
   }
 }
 //getDB();
?>
