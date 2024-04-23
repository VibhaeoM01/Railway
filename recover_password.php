<?php
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
$conn = new mysqli($servername,$port,$username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle password recovery
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recover_email = $_POST['recover_email'];
    
    // Add code to check if the email exists in the database
    $sql_check_email = "SELECT * FROM Users WHERE Email='$recover_email'";
    $result_check_email = $conn->query($sql_check_email);
    if ($result_check_email->num_rows > 0) {
        // Email exists, add code to send password recovery instructions (e.g., send email)
        echo "Password recovery instructions sent to your email";
    } else {
        // Email does not exist in the database
        echo "Email not found";
    }
}

// Close the database connection
$conn->close();
?>
