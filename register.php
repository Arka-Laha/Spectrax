<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="./css/register.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">


</head>
<body>

<br>
<div class="form-div">
    <form action="process_registration.php" method="post">
        <h2 style="text-align:center;color:white;">REGISTRATION FORM</h2>
        <?php
if (isset($_GET['error']) && $_GET['error'] == 1) {
    echo '<div style="color: red; text-align: center;font-weight:bold;font-family:arial;">Data is already present !</div>';
}
?>
        <input type="text" name="team_name" placeholder="Team Name" required><br>
        
        <input type="email" name="email1" placeholder="Participant 1 Email" required>
        <input type="email" name="email2" placeholder="Participant 2 Email" required><br>

        <input type="text" name="participant1" placeholder="Participant 1 Name" required>
        <input type="text" name="participant2" placeholder="Participant 2 Name" required><br>

        <input type="text" name="department1" placeholder="Department Participant 1" required>
        <input type="text" name="department2" placeholder="Department Participant 2" required><br>

        <input type="tel" name="phone_no1" placeholder="phone number Participant 1"  required>
        <input type="tel" name="phone_no2" placeholder="Phone Number Participant 2" required><br>

        <input type="text" name="roll_1" placeholder="Roll Number Participant 1"  required>
        <input type="text" name="roll_2"  placeholder="Roll Number Participant 2" required><br><br>

        <input type="submit" value="Register">
    </form>
</div>

</body>
</html>
