<?php 
require_once("../../Admin_config.php");

// Function to update payment status
function updatePaymentStatus($id, $status) {
    global $db;
    $status = (int)$status; // Convert to integer for security
    $query = "UPDATE registration SET is_paid = $status WHERE id = $id";
    mysqli_query($db, $query);
}

// Check if the payment status is being updated
if(isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $id = $_GET['id'];

    if ($action == 'mark_paid') {
        updatePaymentStatus($id, 1);
    } elseif ($action == 'mark_unpaid') {
        updatePaymentStatus($id, 0);
    }

    header("Location: user_registration_index.php"); // Redirect to refresh the page
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="admin_style.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">
    <title>Registration Index</title>
</head>
<body>
    <a href="/spectra/admin_page.php"><button class="b-bk-btn"><span class="g-bk">⬅<span></button></a>

    <h1 style="text-align:center;font-family:lato;color:black">REGISTRATION - DATA</h1>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "spectra";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to get the counts of team names, participant1, and participant2 in a hypothetical "registration" table
    $sql = "SELECT 
                COUNT(DISTINCT team_name) as team_count, 
                COUNT(DISTINCT participant1) as participant1_count, 
                COUNT(DISTINCT participant2) as participant2_count,

                COUNT(DISTINCT roll_1) as roll1_count,
                COUNT(DISTINCT roll_2) as roll2_count,
                COUNT(DISTINCT participant1) + COUNT(DISTINCT participant2) as total_participants,
                COUNT(DISTINCT roll_1) + COUNT(DISTINCT roll_2) as total_roll
            FROM registration";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data
        $row = $result->fetch_assoc();
        $teamCount = $row["team_count"];
        $totalParticipants = $row["total_participants"];
        $roll1Count = $row["roll1_count"];
        $roll2Count = $row["roll2_count"];
        $totalroll = $row["total_roll"];

        echo '<div class="reg-count">';
        echo '<span>Total Number of teams: ' . $teamCount . '</span>';
        echo '<span>Total number of participants:  ' . $totalParticipants . '</span>';
        echo '<span>Total Number of roll no: ' . $totalroll . '</span>';
        echo '</div>';
    } else {
        echo "No data found in the registration table.";
    }

    // Close connection
    $conn->close();
    ?>
    
    <div class="regd-div">
        <a href="user_registration_add.php"><button class="bt-pri">Upload New data </button></a>
        <a href="don.php"><button class="bt-pri">Download Data</button></a>
        <form method="GET" action="" class="search-a">
            <input type="text" id="search_team_name" name="search_team_name" placeholder="Search by Team Name">
            <button type="submit">Search</button>
        </form>
    </div>

   

    <?php 
    if(isset($_GET['image_success'])) {
        echo '<div class="success">Image Uploaded</div>'; 
    }

    if(isset($_GET['action'])) {
        $action=$_GET['action'];
        if($action=='saved') {
            echo '<div class="success">Saved </div>'; 
        } elseif($action=='deleted') {
            echo '<div class="success">Image Deleted </div>'; 
        }
    }
    ?>
    
    <center>
    <table cellpadding="10">
        <tr class="bg-color-yellowgreen">
            <td>ID</td>
            <td>NAME</td>
            <td>Email1</td>
            <td>Email2</td>
            <td>Participant 1</td>
            <td>Participant 2</td>
            <td>Department 1</td>
            <td>Department 2</td>
            <td>Phone No 1</td>
            <td>Phone No 2</td>
            <td>Roll 1</td>
            <td>Roll 2</td>
            <td>Payment Status</td>
            <td>ACTION</td>
        </tr>
        <?php 
        // Handle search if provided
        $search_team_name = isset($_GET['search_team_name']) ? $_GET['search_team_name'] : '';
        $search_condition = $search_team_name ? "WHERE team_name LIKE '%$search_team_name%'" : "";

        $res=mysqli_query($db,"SELECT * FROM registration $search_condition ORDER BY id ASC");
        while($row = mysqli_fetch_array($res)) {
            $paymentStatus = $row['is_paid'] ? 'Paid' : 'Unpaid';
            echo '<tr> 
                    <td>'.$row['id'].'</td>
                    <td>'.$row['team_name'].'</td>
                    <td>'.$row['email1'].'</td>
                    <td>'.$row['email2'].'</td>
                    <td>'.$row['participant1'].'</td>
                    <td>'.$row['participant2'].'</td>
                    <td>'.$row['department1'].'</td>
                    <td>'.$row['department2'].'</td>
                    <td>'.$row['phone_no1'].'</td>
                    <td>'.$row['phone_no2'].'</td>
                    <td>'.$row['roll_1'].'</td>
                    <td>'.$row['roll_2'].'</td>
                    <td>'.$paymentStatus.'</td>
                    <td width="100px">
                        <a href="user_registration_edit.php?id='.$row['id'].'"><button class="btn-primary">Edit </button></a>
                        <br> <br>
                        <a href=\'user_registration_delete.php?id='.$row['id'].'\' onClick=\'return confirm("Are you sure you want to delete?")\'"><button class="btn-primary btn_del">Delete</button></a>
                        <br> <br>
                        <a href="?action=mark_paid&id='.$row['id'].'"><button class="btn-primary">PAID</button></a>
                        <br> <br>
                        <a href="?action=mark_unpaid&id='.$row['id'].'"><button class="btn-primary btn_del">UNPAID ❌</button></a>
                    </td> 
                </tr>';
        } ?>
    </table>
    </center>
</body>
</html>
