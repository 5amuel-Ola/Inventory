<!-- 
Name: Samuel Olagoke
Date: October 3, 2025
Course: IT202-003
Assignment: Phase01
Email: sio6@njit,edu -->
<?php
session_start();
require_once("config.php");
require_once("shirttype.php");
require_once("shirt.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inventory Helper</title>
    <script src="realtime.js"></script>
</head>
    <link rel="stylesheet" type="text/css" href="ih_styles.css">
    <link rel="icon" type="image/png" href="images/logo.png">
<body>
   <header>
       <?php include("header.inc.php"); ?>
   </header>
   <section style="height: 375;">
    <nav>
       <?php include("nav.inc.php"); ?>
   </nav>

       <main>
    <aside>
           <?php include("aside.inc.php"); ?>
           <script>
               getRealTime();
               setInterval(getRealTime, 5000);
           </script>
       </aside>

           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>

   </section>
   <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>