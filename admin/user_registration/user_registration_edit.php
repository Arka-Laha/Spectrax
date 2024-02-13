<?php 
require_once("../../Admin_config.php"); 
$id = $_GET['id']; 
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="edit.css">
    <title>Registration Edit</title>
</head>
<body><br>
<a href="user_registration_index.php"><button class="b-bk-btn"><span class="g-bk">⬅<span></button></a><br><br>

<h1 style="text-align:center">EDIT DATA</h1>

    <?php
    if(isset($_POST['update_submit']))
    {   
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

        if(!isset($error))
        {
            $result_update = mysqli_query($db, "UPDATE registration SET team_name='$team_name', email1='$email1', email2='$email2', participant1='$participant1', participant2='$participant2', department1='$department1', department2='$department2', phone_no1='$phone_no1', phone_no2='$phone_no2', roll_1='$roll_1', roll_2='$roll_2' WHERE id = $id");

            if($result_update)
            {
                header("location:user_registration_index.php?action=saved");
            }
            else 
            {
                echo 'Something went wrong'; 
            }
        }
    }

    if(isset($error)){ 
        foreach ($error as $error) { 
            echo '<div class="message">'.$error.'</div><br>';     
        }
    }

    $result = mysqli_query($db, "SELECT * FROM registration WHERE id = $id LIMIT 1");
    if($row = mysqli_fetch_array($result)) 
    {
        $id = $row['id'];
        $team_name = $row['team_name'];
        $email1 = $row['email1'];
        $email2 = $row['email2'];
        $participant1 = $row['participant1'];
        $participant2 = $row['participant2'];
        $department1 = $row['department1'];
        $department2 = $row['department2'];
        $phone_no1 = $row['phone_no1'];
        $phone_no2 = $row['phone_no2'];
        $roll_1 = $row['roll_1'];
        $roll_2 = $row['roll_2'];

      
    } 
    ?>

    <?php if(isset($update_sucess))
    {
        echo '<div class="success">Image Updated successfully</div>'; 
    } ?>
    
    <form class="form-container" action="" method="POST" enctype="multipart/form-data">
        <table border="0">
            <tr> 
                <td><label>ID:</label></td>
                <td><input type="id" name="id" value="<?php echo $id; ?>" readonly></td>
            </tr>
            <tr>
                <td><label>Team Name</label></td>
                <td><input type="text" name="team_name" value="<?php echo $team_name; ?>"></td>
            </tr>
            <tr>
                <td><label>Email 1</label></td>
                <td><input type="email" name="email1" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td><label>Email 2</label></td>
                <td><input type="email" name="email2" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td><label>Participant 1</label></td>
                <td><input type="text" name="participant1" value="<?php echo $participant1; ?>"></td>
            </tr>
            <tr>
                <td><label>Participant 2</label></td>
                <td><input type="text" name="participant2" value="<?php echo $participant2; ?>"></td>
            </tr>
            <tr>
                <td><label>Department 1</label></td>
                <td><input type="text" name="department1" value="<?php echo $department1; ?>"></td>
            </tr>
            <tr>
                <td><label>Department 2</label></td>
                <td><input type="text" name="department2" value="<?php echo $department2; ?>"></td>
            </tr>
            <tr>
                <td><label>Phone No 1</label></td>
                <td><input type="text" name="phone_no1" value="<?php echo $phone_no1; ?>"></td>
            </tr>
            <tr>
                <td><label>Phone No 2</label></td>
                <td><input type="text" name="phone_no2" value="<?php echo $phone_no2; ?>"></td>
            </tr>
            <tr>
                <td><label>Roll 1</label></td>
                <td><input type="text" name="roll_1" value="<?php echo $roll_1; ?>"></td>
            </tr>
            <tr>
                <td><label>Roll 2</label></td>
                <td><input type="text" name="roll_2" value="<?php echo $roll_2; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><button name="update_submit" class="btn-primary">Update</button></td>
            </tr>
        </table>   
    </form>
</body>
</html>
