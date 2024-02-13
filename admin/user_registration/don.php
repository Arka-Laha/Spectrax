<?php
// Database connection parameters
require '../../config.php';

// Function to download data as an Excel file (CSV format)
function downloadData() {
    global $conn;

    // Fetch data from the database
    $query = "SELECT id, team_name, email1, email2, participant1, participant2, department1, department2, phone_no1, phone_no2, roll_1, roll_2 FROM registration";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Set headers for Excel file download
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="registration_data.csv"');
        header('Pragma: no-cache');
        header('Expires: 0');

        // Output Excel headers
        $output = fopen('php://output', 'w');
        $columnHeaders = array("ID", "Team Name", "Email1", "Email2", "Participant 1", "Participant 2", "Department 1", "Department 2", "Phone No 1", "Phone No 2", "Roll 1", "Roll 2");
        fputcsv($output, $columnHeaders);

        // Output data to the file
        while ($row = $result->fetch_assoc()) {
            fputcsv($output, $row);
        }

        fclose($output);
    } else {
        echo "No data found!";
    }
}

// Handle the download button click
if (isset($_POST['download'])) {
    downloadData();
    exit; // Terminate the script after download to avoid additional output
}
?>

<!-- HTML content below -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="edit.css">
    <!-- Other head elements as needed -->
    <title>Download</title>
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
