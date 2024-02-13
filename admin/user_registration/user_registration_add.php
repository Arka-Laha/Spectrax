<?php require_once("../../Admin_config.php");?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">

    <link rel="stylesheet" type="text/css" href="add.css">
    <title>Registration Add</title>
</head>
<body>
    <?php
    if(isset($_POST['form_submit']))
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
            $result = mysqli_query($db, "INSERT INTO registration(team_name, email1, email2, participant1, participant2, department1, department2, phone_no1, phone_no2, roll_1, roll_2) VALUES('$team_name', '$email1', '$email2', '$participant1', '$participant2', '$department1', '$department2', '$phone_no1', '$phone_no2', '$roll_1', '$roll_2')");

            if($result)
            {
                header("location:user_registration_index.php?image_success=1");
            }
            else 
            {
                echo 'Something went wrong'; 
            }
        }
    }

    if(isset($error))
    {
        foreach ($error as $error)
        { 
            echo '<div class="message">'.$error.'</div><br>';     
        }
    }
    ?> 

    <br>
    <a href="user_registration_index.php"><button class="b-bk-btn"><span class="g-bk">⬅<span></button></a>
    <h1 style="text-align:center;">UPLOAD DATA</h1>

    <form action="" method="POST" enctype="multipart/form-data" class="form-container">
        <table>
            <tr>        
                <td><label>Team Name</label></td>
                <td><input type="text" name="team_name" class="form-control" REQUIRED></td>
            </tr>
            <tr>
                <td><label>Email 1</label></td>
                <td><input type="email" name="email1" class="form-control" REQUIRED></td>
            </tr>
            <tr>
                <td><label>Email 2</label></td>
                <td><input type="email" name="email2" class="form-control" REQUIRED></td>
            </tr>
            <tr>
                <td><label>Participant 1</label></td>
                <td><input type="text" name="participant1" class="form-control" REQUIRED></td>
            </tr>
            <tr>
                <td><label>Participant 2</label></td>
                <td><input type="text" name="participant2" class="form-control" REQUIRED></td>
            </tr>
            <tr>
                <td><label>Department 1</label></td>
                <td><input type="text" name="department1" class="form-control" REQUIRED></td>
            </tr>
            <tr>
                <td><label>Department 2</label></td>
                <td><input type="text" name="department2" class="form-control" REQUIRED></td>
            </tr>
            <tr>
                <td><label>Phone No 1</label></td>
                <td><input type="text" name="phone_no1" class="form-control" REQUIRED></td>
            </tr>
            <tr>
                <td><label>Phone No 2</label></td>
                <td><input type="text" name="phone_no2" class="form-control" REQUIRED></td>
            </tr>
            <tr>
                <td><label>Roll 1</label></td>
                <td><input type="text" name="roll_1" class="form-control" REQUIRED></td>
            </tr>
            <tr>
                <td><label>Roll 2</label></td>
                <td><input type="text" name="roll_2" class="form-control" REQUIRED></td>
            </tr>
            <tr>
                <td></td>
                <td><button name="form_submit" class="btn-primary"> Upload</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
