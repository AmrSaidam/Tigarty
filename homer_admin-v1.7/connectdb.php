

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="mustafa3_tigarty";
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>