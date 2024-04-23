<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "bt1511yashi@";
$database = "railway";
$port = 4306; // Ensure it's an integer

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle modifying train details
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming the form fields are named train_id, new_destination, etc.
    $train_id = $_POST['train_id'];
    $new_destination = $_POST['new_destination'];
    // Add more form fields as needed
    
    // Add code to update the train details in the database
    $sql_modify_train = "UPDATE Trains SET Destination = '$new_destination' WHERE TrainID = $train_id";
    if ($conn->query($sql_modify_train) === TRUE) {
        echo "Train details modified successfully";
    } else {
        echo "Error modifying train details: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
