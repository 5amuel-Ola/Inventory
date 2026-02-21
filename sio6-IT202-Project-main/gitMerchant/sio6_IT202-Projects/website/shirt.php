<!-- 
Name: Samuel Olagoke
Date: October 17, 2025
Course: IT202-003
Assignment: Phase02
Email: sio6@njit.edu -->
<!--<?php
require_once('database.php');
class Shirt  
{
    public $ShirtID;
    public $ShirtCode;
    public $ShirtName;
    public $ShirtDescription;
    public $ShirtSeason;
    public $ShirtSize;
    public $ShirtTypeID;
    public $ShirtWholesalePrice;
    public $ShirtListPrice;

   function __construct(
        $ShirtID,
        $ShirtCode,
        $ShirtName,
        $ShirtDescription,
        $ShirtSeason,
        $ShirtSize,
        $ShirtTypeID,
        $ShirtWholesalePrice,
        $ShirtListPrice
       ) {
       $this->ShirtID = $ShirtID;
       $this->ShirtCode = $ShirtCode;
       $this->ShirtName = $ShirtName;
       $this->ShirtDescription = $ShirtDescription;
       $this->ShirtSeason = $ShirtSeason;
       $this->ShirtSize = $ShirtSize;
       $this->ShirtTypeID = $ShirtTypeID;
       $this->ShirtWholesalePrice = $ShirtWholesalePrice;
       $this->ShirtListPrice = $ShirtListPrice;
   }
   
   function __toString()
   {
       $output = "<h2>Shirt: $this->ShirtID</h2>\n" .
           "<h3>Name: $this->ShirtName</h3>\n" .
           "<h3>Shirt Type ID: $this->ShirtTypeID</h3>\n" .
           "<h3>List Price: $$this->ShirtListPrice | Wholesale Price: $$this->ShirtWholesalePrice</h3>\n" .
           "<h3>Description: $this->ShirtDescription</h3>\n" .
           "<h3>Season: $this->ShirtSeason</h3>\n" .
           "<h3>Size: $this->ShirtSize</h3>\n";
       return $output;
   }
   
   function saveShirt()
   {
       $db = getDB();
       $query = "INSERT INTO Shirts VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, DEFAULT, DEFAULT) ";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "isssssidd",
           $this->ShirtID,
           $this->ShirtCode,
           $this->ShirtName,
           $this->ShirtDescription,
           $this->ShirtSeason,
           $this->ShirtSize,
           $this->ShirtTypeID,
           $this->ShirtWholesalePrice,
           $this->ShirtListPrice
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }

    static function getShirts()
    {
        $db = getDB();
        $query = "SELECT * FROM Shirts";
        $result = $db->query($query);
        if (mysqli_num_rows($result) > 0) {
            $Shirts = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $shirt = new Shirt(
                    $row['ShirtID'],
                    $row['ShirtCode'],
                    $row['ShirtName'],
                    $row['ShirtDescription'],
                    $row['ShirtSeason'],
                    $row['ShirtSize'],
                    $row['ShirtTypeID'],
                    $row['ShirtWholesalePrice'],
                    $row['ShirtListPrice']
                );
                array_push($Shirts, $shirt);
            }
            $db->close();
            return $Shirts;
        } else {
            $db->close();
            return NULL;
        }
    }
    
   static function findShirt($ShirtID)
   {
       $db = getDB();
       $query = "SELECT * FROM Shirts WHERE ShirtID = ?";  
       $stmt = $db->prepare($query);
       $stmt->bind_param("i", $ShirtID);
       $stmt->execute();
       $result = $stmt->get_result();
       $row = $result->fetch_array(MYSQLI_ASSOC);
       
       if ($row) {
           $shirt = new Shirt(
                $row['ShirtID'],
                $row['ShirtCode'],
                $row['ShirtName'],
                $row['ShirtDescription'],
                $row['ShirtSeason'],
                $row['ShirtSize'],
                $row['ShirtTypeID'],
                $row['ShirtWholesalePrice'],
                $row['ShirtListPrice']
           );
           $db->close();
           return $shirt;
       } else {
           $db->close();
           return NULL;
       }
   }
   
   function updateShirt()
   {
       $db = getDB();
       $query = "UPDATE Shirts SET ShirtCode= ?, ShirtName= ?, " .
           "ShirtDescription= ?, ShirtSeason= ?, ShirtSize= ?, ShirtTypeID= ?, " .
           "ShirtWholesalePrice= ?, ShirtListPrice= ? WHERE ShirtID = ?"; 
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "sssssiddi",
           $this->ShirtCode,
           $this->ShirtName,
           $this->ShirtDescription,
           $this->ShirtSeason,
           $this->ShirtSize,
           $this->ShirtTypeID,
           $this->ShirtWholesalePrice,
           $this->ShirtListPrice,
           $this->ShirtID
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   
   function removeShirt()
   {
       $db = getDB();
       $query = "DELETE FROM Shirts WHERE ShirtID = $this->ShirtID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }

   static function getShirtsByShirtType($ShirtTypeID)
   {
       $db = getDB();
       $query = "SELECT * from Shirts where ShirtTypeID = ?";  
       $stmt = $db->prepare($query);
       $stmt->bind_param("i", $ShirtTypeID);
       $stmt->execute();
       $result = $stmt->get_result();
       
       if (mysqli_num_rows($result) > 0) {
           $Shirts = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $Shirt = new Shirt(
                   $row['ShirtID'],
                   $row['ShirtCode'],
                   $row['ShirtName'],
                   $row['ShirtDescription'],
                   $row['ShirtSeason'],
                   $row['ShirtSize'],
                   $row['ShirtTypeID'],
                   $row['ShirtWholesalePrice'],
                   $row['ShirtListPrice']
               );
               array_push($Shirts, $Shirt);
           }
           $db->close();
           return $Shirts;
       } else {
           $db->close();
           return NULL;
       }

       
   }

    static function getTotalShirts()
    {
        $db = getDB();
        $query = "SELECT COUNT(ShirtID) FROM Shirts";
        $result = $db->query($query);
        $row = $result->fetch_array();
        if ($row) {
            return $row[0];
        } else {
            return NULL;
        }
    }
    static function getTotalListPrice()
    {
        $db = getDB();
        $query = "SELECT SUM(ShirtListPrice) FROM Shirts";
        $result = $db->query($query);
        $row = $result->fetch_array();
        if ($row) {
            return $row[0];
        } else {
            return NULL;
        }
    }

        static function getTotalWholeSalePrice()
    {
        $db = getDB();
        $query = "SELECT SUM(ShirtWholesalePrice) FROM Shirts";
        $result = $db->query($query);
        $row = $result->fetch_array();
        if ($row) {
            return $row[0];
        } else {
            return NULL;
        }
    }

}
?>-->