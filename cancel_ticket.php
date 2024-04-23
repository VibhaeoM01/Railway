<?php
// Database connection parameters
$servername = "localhost";
$port = 4306; // Adjust the port as needed
$username = "root";
$password = "bt1511yashi@";
$database = "railway";

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle ticket cancellation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ticket_id = $_POST['cancel_ticket_id'];

    // Prepare and bind SQL statement to prevent SQL injection
    $stmt = $conn->prepare("UPDATE Tickets SET Status = 'Cancelled' WHERE TicketID = ?");
    $stmt->bind_param("i", $ticket_id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Ticket cancelled successfully";
    } else {
        echo "Error cancelling ticket: " . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
