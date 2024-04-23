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
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch booking history data from Tickets table
$sql = "SELECT * FROM Tickets"; // Select all rows from Tickets table
$result = $conn->query($sql);

// Array to hold booking history data
$booking_history = array();

// Check for errors in query execution
if (!$result) {
    die("Error fetching booking history: " . $conn->error);
}

// Fetch booking history data and store it in the array
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Sanitize output to prevent XSS attacks
        $row = array_map('htmlspecialchars', $row);
        $booking_history[] = $row;
    }
}

// Close the database connection
$conn->close();

// Return JSON response
header('Content-Type: application/json');
echo json_encode($booking_history);
?>
