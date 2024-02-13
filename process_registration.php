<?php
// Include the config file
require 'config.php';

// Get form data
$team_name = $_POST['team_name'];
$email1 = $_POST['email1'];
$email2 = $_POST['email2'];
$participant1 = $_POST['participant1'];
$participant2 = $_POST['participant2'];
$department1 = $_POST['department1'];
$department2 = $_POST['department2'];
$phone_no1 = $_POST['phone_no1'];
$phone_no2 = $_POST['phone_no2'];
$roll_1 = $_POST['roll_1'];
$roll_2 = $_POST['roll_2'];

// Check if the data already exists
$check_sql = "SELECT * FROM registration WHERE team_name = '$team_name' AND email1 = '$email1'";
$check_result = $conn->query($check_sql);

if ($check_result->num_rows > 0) {
    // Data is already present, redirect with error message
    header("Location: register.php?error=1");
    exit();
} else {
    // SQL query to insert data into the registration table
    $insert_sql = "INSERT INTO registration (team_name, email1, email2, participant1, participant2, department1, department2, phone_no1, phone_no2, roll_1, roll_2)
            VALUES ('$team_name', '$email1', '$email2', '$participant1', '$participant2', '$department1', '$department2', '$phone_no1', '$phone_no2', '$roll_1', '$roll_2')";

    if ($conn->query($insert_sql) === TRUE) {
        // Registration successful, redirect with success message
        session_start();
        $_SESSION['Registration successful!'] = true;
        header("Location: index.php?success=1");
        exit();
    } else {
        echo "Error: " . $insert_sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
