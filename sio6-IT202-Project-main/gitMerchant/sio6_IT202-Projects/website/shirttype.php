<!-- 
Name: Samuel Olagoke
Date: October 17, 2025
Course: IT202-003
Assignment: Phase02
Email: sio6@njit.edu -->
<?php
require_once('database.php');

class ShirtType
{
    public $ShirtTypeID;
    public $ShirtTypeCode;
    public $ShirtTypeName;
    public $ShirtAisle;

    // Constructor
    function __construct($ShirtTypeID, $ShirtTypeCode, $ShirtTypeName, $ShirtAisle)
    {
        $this->ShirtTypeID = $ShirtTypeID;
        $this->ShirtTypeCode = $ShirtTypeCode;
        $this->ShirtTypeName = $ShirtTypeName;
        $this->ShirtAisle = $ShirtAisle;
    }

    // toString (for easy display)
    function __toString()
    {
        $output = "<h2>Shirt Type ID: $this->ShirtTypeID</h2>\n" .
                  "<h3>$this->ShirtTypeCode, $this->ShirtTypeName (Aisle: $this->ShirtAisle)</h3>\n";
        return $output;
    }

    // CREATE
    function saveShirtType()
    {
        $db = getDB();
        $query = "INSERT INTO ShirtTypes VALUES (?, ?, ?, ?, DEFAULT, DEFAULT)";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "isss",
            $this->ShirtTypeID,
            $this->ShirtTypeCode,
            $this->ShirtTypeName,
            $this->ShirtAisle
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    // READ (get all ShirtTypes)
    static function getShirtTypes()
    {
        $db = getDB();
        $query = "SELECT * FROM ShirtTypes";
        $result = $db->query($query);

        if (mysqli_num_rows($result) > 0) {
            $shirtTypes = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $shirtType = new ShirtType(
                    $row['ShirtTypeID'],
                    $row['ShirtTypeCode'],
                    $row['ShirtTypeName'],
                    $row['ShirtAisle']
                );
                array_push($shirtTypes, $shirtType);
                unset($shirtType);
            }
            $db->close();
            return $shirtTypes;
        } else {
            $db->close();
            return NULL;
        }
    }

    static function findShirtType($ShirtTypeID)
    {
    $db = getDB();
    $query = "SELECT * FROM ShirtTypes WHERE ShirtTypeID = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("i", $ShirtTypeID);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array(MYSQLI_ASSOC);

    if ($row) {
        $shirtType = new ShirtType(
            $row['ShirtTypeID'],
            $row['ShirtTypeCode'],
            $row['ShirtTypeName'],
            $row['ShirtAisle']
        );
        $db->close();
        return $shirtType;
    } else {
        $db->close();
        return NULL;
    }
    }

    // UPDATE
    function updateShirtType()
    {
        $db = getDB();
        $query = "UPDATE ShirtTypes SET ShirtTypeCode = ?, ShirtTypeName = ?, ShirtAisle = ? 
                  WHERE ShirtTypeID = $this->ShirtTypeID";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "ssi",
            $this->ShirtTypeCode,
            $this->ShirtTypeName,
            $this->ShirtAisle
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    // DELETE
    function removeShirtType()
    {
        $db = getDB();
        $query = "DELETE FROM ShirtTypes WHERE ShirtTypeID = $this->ShirtTypeID";
        $result = $db->query($query);
        $db->close();
        return $result;
    }

    static function getTotalShirtType()
{
   $db = getDB();
   $query = "SELECT COUNT(ShirtTypeID) FROM ShirtTypes";
   $result = $db->query($query);
   $row = $result->fetch_array();
   if ($row) {
       return $row[0];
   } else {
       return NULL;
   }
}


}
?>