<?php 


$q = $_REQUEST["q"];
// Array with names
include 'connectdb.php';

$sql="SELECT * FROM `productdetails` where Adminid= 1";
$result = mysqli_query($conn,$sql);

$a = array();
while($row = mysqli_fetch_array($result)) {
    $a [] =  $row['productname'];
    
    
}

// get the q parameter from URL

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;

























?>