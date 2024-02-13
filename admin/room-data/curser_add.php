
<?php require_once("f.php");?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="edit.css">
	<link rel="stylesheet" type="text/css" href="univarsal.css">
</head>
<body>
<?php
if(isset($_POST['form_submit'])) {
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
    $h_name = $_POST['h_name'];
    $l_address = $_POST['l_address'];
    $s_address = $_POST['s_address'];
    $bed = $_POST['bed'];
    $folder = "uploadimg/";
    $image_file = $_FILES['image']['name'];
    $file = $_FILES['image']['tmp_name'];
    $image_2_file = $_FILES['image_2']['name'];
    $file_2 = $_FILES['image_2']['tmp_name'];
	$image_3_file = $_FILES['image_3']['name'];
    $file_3 = $_FILES['image_3']['tmp_name'];
	$image_4_file = $_FILES['image_4']['name'];
    $file_4 = $_FILES['image_4']['tmp_name'];
	$image_5_file = $_FILES['image_5']['name'];
    $file_5 = $_FILES['image_5']['tmp_name'];
    $details = $_POST['details'];
    $ph_no = $_POST['ph_no'];
    $type = $_POST['type'];
    $mail = $_POST['mail'];
	$city = $_POST['city'];
	$star = $_POST['star'];
	$geo_location = $_POST['geo_location'];
	$price = $_POST['price'];

	$target_file = $folder . basename($image_file);
    $target_file_2 = $folder . basename($image_2_file);
	$target_file_3 = $folder . basename($image_3_file);
    $target_file_4 = $folder . basename($image_4_file);
    $target_file_5 = $folder . basename($image_5_file);
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    $imageFileType_2 = pathinfo($target_file_2, PATHINFO_EXTENSION);
	$imageFileType_3 = pathinfo($target_file_3, PATHINFO_EXTENSION);
	$imageFileType_4 = pathinfo($target_file_4, PATHINFO_EXTENSION);
	$imageFileType_5 = pathinfo($target_file_5, PATHINFO_EXTENSION);
    $error = []; 

    // Check if both image files are set and allowed file types
    if (isset($image_file) && !empty($image_file) && isset($image_2_file) && !empty($image_2_file) && isset($image_3_file) && !empty($image_3_file) && isset($image_4_file) && !empty($image_4_file) && isset($image_5_file) && !empty($image_5_file) ) {
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed for the first image.';
        }
        if ($imageFileType_2 != "jpg" && $imageFileType_2 != "png" && $imageFileType_2 != "jpeg" && $imageFileType_2 != "gif") {
            $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed for the second image.';
        }
		if ($imageFileType_3 != "jpg" && $imageFileType_3 != "png" && $imageFileType_3 != "jpeg" && $imageFileType_3 != "gif") {
            $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed for the third image.';
        }
		if ($imageFileType_4 != "jpg" && $imageFileType_4 != "png" && $imageFileType_4 != "jpeg" && $imageFileType_4 != "gif") {
            $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed for the fourth image.';
        }
		if ($imageFileType_5 != "jpg" && $imageFileType_5 != "png" && $imageFileType_5 != "jpeg" && $imageFileType_5 != "gif") {
            $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed for the fifth image.';
        }
    } else {
        $error[] = "Please select both the images.";
    }

    if (empty($h_name)) {
        $error[] = "Hotel name is required.";
    }

    if (empty($l_address)) {
        $error[] = "Local address is required.";
    }

    if (empty($s_address)) {
        $error[] = "Street address is required.";
    }

    if (empty($bed)) {
        $error[] = "Owner name is required.";
    }

    if (empty($ph_no)) {
        $error[] = "Phone number is required.";
    }

    if (empty($type)) {
        $error[] = "Type is required.";
    }

    if (empty($mail)) {
        $error[] = "Email is required.";
    }

    if (empty($details)) {
        $error[] = "Details are required.";
    }

    if (empty($city)) {
        $error[] = "BHK is required.";
    }

	if (empty($star)) {
        $error[] = "Star rating is required.";
    }

	if (empty($geo_location)) {
        $error[] = "Geo location is required.";
    }

	if (empty($price)) {
        $error[] = "price is required.";
    }

    if (empty($error)) {
        move_uploaded_file($file, $target_file);
        move_uploaded_file($file_2, $target_file_2);
		move_uploaded_file($file_3, $target_file_3);
		move_uploaded_file($file_4, $target_file_4);
		move_uploaded_file($file_5, $target_file_5);
        $query = "INSERT INTO room (h_name, l_address, s_address, bed, image, image_2, image_3, image_4, image_5, ph_no, type, mail, details, city, star, geo_location, price) VALUES ('$h_name','$l_address','$s_address','$bed','$target_file','$target_file_2','$target_file_3','$target_file_4','$target_file_5','$ph_no','$type','$mail','$details','$city','$star','$geo_location','$price')";
        if(mysqli_query($con, $query)){
            header("Location: curser_index.php");
            exit();
        }else{
            $error[] = "Unable to save record.";

            error_log(mysqli_error($con), 3, "error.log");
        }
    }
}

?>

<div class="container">
	<center><h1>Room Details</h1></center>
	<div class="form-container">
		<form method="POST" enctype="multipart/form-data" action="">
			<?php if (!empty($error)) { ?>
				<div class="error-container">
					<ul>
						<?php foreach ($error as $value) { ?>
							<li><?php echo $value; ?></li>
						<?php } ?>
					</ul>
				</div>
			<?php } ?>
			<div class="form-group">
				<label for="h_name">Name of the property:</label>
				<input type="text" name="h_name" id="h_name" placeholder="Enter hotel name" required>
			</div>
			<div class="form-group">
				<label for="l_address">Long Address:</label>
				<input type="text" name="l_address" id="l_address" placeholder="Enter local address" required>
			</div>
			<div class="form-group">
				<label for="s_address">State:</label>
				<input type="text" name="s_address" id="s_address" placeholder="Enter street address" required>
			</div>
			<div class="form-group">
				<label for="city">City:</label>
				<input type="text" name="city" id="city"  placeholder="Enter city" required>
			</div>
			<div class="form-group">
				<label for="bed">Bed:</label>
				<input type="text" name="bed" id="bed" placeholder="Enter bed type" required>
			</div>
			<div class="form-group">
				<label for="image">Image 1:</label>
				<input type="file" name="image" id="image" required>
			</div>
			<div class="form-group">
				<label for="image_2">Image 2:</label>
				<input type="file" name="image_2" id="image_2" required>
			</div>
			<div class="form-group">
				<label for="image_3">Image 3:</label>
				<input type="file" name="image_3" id="image_3" required>
			</div>
			<div class="form-group">
				<label for="image_4">Image 4:</label>
				<input type="file" name="image_4" id="image_4" required>
			</div>
			<div class="form-group">
				<label for="image_5">Image 5:</label>
				<input type="file" name="image_5" id="image_5" required>
			</div>
			<div class="form-group">
				<label for="ph_no">Phone Number:</label>
				<input type="text" name="ph_no" id="ph_no" placeholder="Enter phone number" required>
			</div>
			<div class="form-group">
				<label for="type">Type:</label>
				<select name="type" id="type" required>
					<option value="">Select type</option>
					<option value="Hotel">Hotel</option>
					<option value="Resort">Resort</option>
					<option value="Guest House">Guest House</option>
                    <option value="Lodge">Lodge</option>
				</select>
			</div>
			<div class="form-group">
				<label for="mail">Email:</label>
				<input type="email" name="mail" id="mail" placeholder="Enter email" required>
			</div>
			<div class="form-group">
				<label for="details">Details:</label>
				<textarea name="details" id="details" placeholder="Enter details" required style="width:380px"></textarea>
			</div>
			<div class="form-group">
				<label for="star">Star Rating:</label>
				<select name="star">
            <option value="⭐">⭐</option>
            <option value="⭐⭐">⭐⭐</option>
            <option value="⭐⭐⭐">⭐⭐⭐</option>
            <option value="⭐⭐⭐⭐">⭐⭐⭐⭐</option>
            <option value="⭐⭐⭐⭐⭐">⭐⭐⭐⭐⭐</option>
        </select>
			</div>
			<div class="form-group">
				<label for="geo_location">Geo Location:</label>
				<input type="text" name="geo_location" id="geo_location" placeholder="Enter geo location" required>
			</div>

			<div class="form-group">
				<label for="h_name">Price:</label>
				<input type="text" name="price" id="price" placeholder="Enter" required>
			</div>

			<div class="form-group">
				<input type="submit" name="form_submit" value="Submit">
			</div>
		</form>
	</div>
</div>
</body>
</html>
