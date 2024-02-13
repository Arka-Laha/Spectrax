<?php
// Database connection details (replace with your actual details)
require 'config.php';

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// SQL query to insert data into the table
$sql = "INSERT INTO mail (name, email, message) VALUES ('$name', '$email', '$message')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    // Set session variable to indicate successful registration
    session_start();
    $_SESSION['registration_success'] = true;

    // Redirect to contact.php with success message as a query parameter
    header("Location: contact.php?success=1");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
