<?php
session_start(); // Start the session


// Database connection parameters
$servername = "localhost";
<<<<<<< HEAD
$port = 4306; // Adjust the port as needed
$username = "root";
$password = "bt1511yashi@";
=======
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

// Handle user login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Add code to validate user credentials
    $sql = "SELECT * FROM Users WHERE Username='$username' AND Password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful, set session variable and redirect to dashboard
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // Login failed, display error message
        echo "Invalid username or password";
    }
}

// Close the database connection
$conn->close();
?>
