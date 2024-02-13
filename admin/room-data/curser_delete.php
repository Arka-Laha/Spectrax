<?php 
require_once("curser_config.php"); 

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $res = mysqli_query($db, "SELECT * FROM room WHERE id=$id LIMIT 1");

    if(mysqli_num_rows($res) == 1) {
        $row = mysqli_fetch_array($res);
        $deleteimage = $row['image']; 

        $folder = "uploadimg/";
        if(file_exists($folder.$deleteimage)) {
            unlink($folder.$deleteimage);
        }

        $result = mysqli_query($db, "DELETE FROM room WHERE id=$id") ; 

        if($result) {
            header("location:curser_index.php?action=deleted");
            exit();
        } else {
            echo "Error deleting record: " . mysqli_error($db);
        }
    } else {
        echo "No record found with ID: $id";
    }
} else {
    echo "Invalid request.";
}
?>
