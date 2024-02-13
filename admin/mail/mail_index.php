<?php require_once("../../Admin_config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="admin_style.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">

	<title>Upload image, display, edit and delete in PHP </title>
</head>
<body>
<a href="/spectra/admin_page.php"><button class="b-bk-btn"><span class="g-bk">⬅<span></button></a>

	<h1 style="text-align:center;font-family:lato;color:black">MAIL - DATA</h1>
		
		<br><br><br>
	<?php 
	if(isset($_GET['image_success']))
		{
		echo '<div class="success">Image Uploaded</div>'; 
		}

		if(isset($_GET['action']))
		{
    $action=$_GET['action'];
	if($action=='saved')
	{
		echo '<div class="success">Saved </div>'; 
	}
	elseif($action=='deleted')
	{
		echo '<div class="success">Image Deleted </div>'; 
	}
		}
	?>
	<center>
	<table cellpadding="10">
		<tr class="bg-color-yellowgreen"><td>ID</td>
		    <td>TIME</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>DESCRIPTION</td>
			<td>ACTION</td>
		</tr>
		<?php 
		$res=mysqli_query($db,"SELECT* from mail ORDER by id ASC");
			while($row = mysqli_fetch_array($res)) 
			{
				echo '<tr> 
                <td>'.$row['id'].'</td>
				<td>'.$row['created_at'].'</td>
                <td>'.$row['name'].'</td>
                <td>'.$row['email'].'</td>
				<td>'.$row['message'].'</td>
				
                <td width="100px">
                
                <a href=\'mail_delete.php?id='.$row['id'].'\' onClick=\'return confirm("Are you sure you want to delete?")\'"><button class="btn-primary btn_del">Delete</button></a>
                </td> 
				</tr>';
} ?>
		
	</table>
</center>
</body>
</html>