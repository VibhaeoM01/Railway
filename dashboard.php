<?php
// Database connection parameters
<<<<<<< HEAD
$servername = "localhost";
$port = 4306; // Adjust the port as needed
$username = "root";
$password = "bt1511yashi@";
=======

$servername = "localhost";
$port = 3307; // Adjust the port as needed
$username = "root";
$password = "";
>>>>>>> e6350249bf4164cd7287524770ba5d85de09d67a
$database = "railway";
// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}

// Display the dashboard content
echo "Welcome, " . $_SESSION['username'] . "! This is your dashboard.";
?>
