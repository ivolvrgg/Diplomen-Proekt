<?php
$servername = "localhost";
$username = "root";      // или drone_shop
$password = "";          // паролата, ако имаш
$dbname = "drone_shop";
$port = 3306;

// Create connection (host, user, pass, db, port)
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>