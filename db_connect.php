<?php
$servername = "localhost";
$username = "root";
$password = "Ananya@2005";  // your actual MySQL password
$database = "SRM_University";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
//echo "✅ Connected successfully to SRM_University database!";

?>
