<!-- 
    Open a Connection to MySQL
 Example (MySQLi Object-Oriented)
-->
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

//Close the Connection
$conn->close();
?>
