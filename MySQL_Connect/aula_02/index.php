<!-- 
    Open a Connection to MySQL
    Example (MySQLi Procedural)
-->
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//Close the Connection
mysqli_close($conn);
?>
