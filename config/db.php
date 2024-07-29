<?php
define('DB_HOST', 'localhost'); // Database host
define('DB_USER', 'root'); // Database username
define('DB_PASS', ''); // Database password
define('DB_NAME', 'billing_system'); // Database name


// Create a new mysqli object with database connection parameters
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// You can also include a function to close the connection
function closeConnection($conn)
{
    $conn->close();
}