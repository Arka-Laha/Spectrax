<?php
// Database connection parameters
require '../../config.php';

// Function to download data as a text file
function downloadData() {
    global $conn;

    // Fetch data from the database
    $query = "SELECT * FROM admin_login";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Set headers for file download
        header('Content-Type: text/plain');
        header('Content-Disposition: attachment; filename="admin_data.txt"');

        // Output data to the file
        while ($row = $result->fetch_assoc()) {
            echo implode("\t", $row) . "\n";
        }
    } else {
        echo "No data found!";
    }
}

// Handle the download button click
if (isset($_POST['download'])) {
    downloadData();
    exit; // Terminate the script after download to avoid additional output
}

// Close the database connection
$conn->close();
?>

<!-- HTML content below -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="edit.css">
    <!-- Other head elements as needed -->
    <title>Combined Page</title>
</head>
<body>

<!-- Your HTML content here -->
<!-- Download button -->
<div class="but-download-con">
    <form action="" method="post">
        <button type="submit" name="download" class="but-download">Download Data</button>
    </form>
    <a href="user_registration_index.php"><button class="but-download">Back</button></a>
</div>

</body>
</html>
