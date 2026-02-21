<!-- 
Name: Samuel Olagoke
Date: October 3, 2025
Course: IT202-003
Assignment: Phase01
Email: sio6@njit,edu -->
<?php
 error_log("\$_POST " . print_r($_POST, true));
 require_once('database.php');
 $emailAddress = htmlspecialchars($_POST['emailAddress']);
 $password = $_POST['password'];
 if(filter_var($emailAddress, FILTER_VALIDATE_EMAIL)){
    $db = getDB();
    $query = "SELECT firstName, lastName, pronouns FROM ShirtManagers " .
            "WHERE emailAddress = ? AND password = SHA2(?,256)";
    $stmt = $db->prepare($query);
    $stmt->bind_param("ss", $emailAddress, $password);
    $stmt->execute();
    $stmt->bind_result($firstName, $lastName, $pronouns);
    $fetched = $stmt->fetch();
    $name = "$firstName $lastName";
    if ($fetched && isset($name)) {
      echo "<h2>Welcome to the Shirt Store Inventory Helper, $name</h2>\n";
      $_SESSION['login'] = true;
      $_SESSION['firstName'] = $firstName;
      $_SESSION['lastName'] = $lastName;
      $_SESSION['emailAddress'] = $emailAddress;
      $_SESSION['pronouns'] = $pronouns;
      header("Location: index.php");
    } else {
      echo "<h2>Sorry, login incorrect for SHIRT inventory</h2>\n";
      echo "<a href=\"index.php\">Please try again</a>\n";
    }
 } else{
  echo "<h2>Please enter a valid email address </h2>\n";
  echo '<a href="index.php">Please try again </a>';
 }
?>
