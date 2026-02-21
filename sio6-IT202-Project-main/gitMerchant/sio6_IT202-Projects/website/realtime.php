<?php
ob_start();
include("shirttype.php");
include("shirt.php");

// Fetch values using the static methods from shirttype.php and shirt.php
$totalShirtTypes = ShirtType::getTotalShirtType();
$totalShirts = Shirt::getTotalShirts();
$listpricetotal = Shirt::getTotalListPrice();
$wholesalepricetotal = Shirt::getTotalWholeSalePrice();

$doc = new DOMDocument("1.0");
$inventoryElement = $doc->createElement("inventory");
$inventoryElement = $doc->appendChild($inventoryElement);

// Add <shirttypes> XML element with value
$shirttypesElement = $doc->createElement("shirttypes", $totalShirtTypes);
$shirttypesElement = $inventoryElement->appendChild($shirttypesElement);

// Add <shirts> XML element with value
$shirtsElement = $doc->createElement("shirts", $totalShirts);
$shirtsElement = $inventoryElement->appendChild($shirtsElement);

// Add <listpricetotal> XML element with value
$listpricetotalElement = $doc->createElement("listpricetotal", $listpricetotal);
$listpricetotalElement = $inventoryElement->appendChild($listpricetotalElement);

// Add <wholesalepricetotal> XML element with value
$wholesalepricetotalElement = $doc->createElement("wholesalepricetotal", $wholesalepricetotal);
$wholesalepricetotalElement = $inventoryElement->appendChild($wholesalepricetotalElement);

$output = $doc->saveXML();
header("Content-type: application/xml");
ob_end_clean();
echo $output;
?>