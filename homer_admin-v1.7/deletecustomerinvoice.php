<?php 
include 'connectdb.php';






$sql = "DELETE FROM `customersinvoiceitem` WHERE `invoiceID` = ".$_POST["id"];

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
}


$sql = "DELETE FROM `customersinvoice` where invoiceID =".$_POST["id"];

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
}




















?>