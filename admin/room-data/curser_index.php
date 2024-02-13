<?php require_once("curser_config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="curser_style.css">
<link rel="stylesheet" type="text/css" href="univarsal.css">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<a href="/spectra/admin_page.php"><button class="b-bk-btn"><span class="g-bk">⬅<span></button></a>
	<h1 class="text-center font-lato txt25">DATA</h1>
<div class="container_display">
		<span style="float:right;"><a href="curser_add.php"><button class="btn-primary">New data </button></a></span>
		<br><br><br><br>
	<?php 
	if(isset($_GET['image_success']))
		{
		echo '<div class="success">Image Uploaded successfully</div>'; 
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
		echo '<div class="success">Data Deleted Successfully ... </div>'; 
	}
		}
	?>
	<table cellpadding="10">
		<tr><td class="bg-color-grey text-bold">ID</td>
			<td class="bg-color-grey text-bold">HOUSE NAME</td>
			<td class="bg-color-grey text-bold">PRICE</td>
			<td class="bg-color-grey text-bold">LONG ADDRESS</td>
			<td class="bg-color-grey text-bold">STATE</td>
			<td class="bg-color-grey text-bold">ROOM</td>
		
			<td class="bg-color-grey text-bold">PH-NO</td>
			<td class="bg-color-grey text-bold">IMAGE</td>
			<td class="bg-color-grey text-bold">IMAGE 2</td>
			<td class="bg-color-grey text-bold">IMAGE 3</td>
			<td class="bg-color-grey text-bold">IMAGE 4</td>
			<td class="bg-color-grey text-bold">IMAGE 5</td>
			<td class="bg-color-grey text-bold">DETAILS</td>
			<td class="bg-color-grey text-bold">MAIL</td>
			<td class="bg-color-grey text-bold">TYPE</td>
			<td class="bg-color-grey text-bold">CITY</td>
			<td class="bg-color-grey text-bold">STAR</td>
			<td class="bg-color-grey text-bold">GEO</td>
			<td class="bg-color-grey text-bold">ACTION</td>
		</tr>
		<?php 
		$res=mysqli_query($db,"SELECT* from room ORDER by id ASC");
			while($row = mysqli_fetch_array($res)) 
			{
				echo '<tr> 
                <td>'.$row['id'].'</td>
                <td width="100px">'.$row['h_name'].'</td>
				<td width="100px">'.$row['price'].'</td>
				<td>'.$row['l_address'].'</td>
				<td>'.$row['s_address'].'</td>
				<td>'.$row['bed'].'</td>
				<td>'.$row['ph_no'].'</td>
                <td><img src="'.$row['image'].'" height="50px" width="50px"></td> 
				<td><img src="'.$row['image_2'].'" height="50px" width="50px"></td> 
				<td><img src="'.$row['image_3'].'" height="50px" width="50px"></td> 
				<td><img src="'.$row['image_4'].'" height="50px" width="50px"></td> 
				<td><img src="'.$row['image_5'].'" height="50px" width="50px"></td> 
				<td width="350px">Data inserted</td>
				<td>'.$row['mail'].'</td>
				<td>'.$row['type'].'</td>
				<td>'.$row['city'].'</td>
				<td>'.$row['star'].'</td>
				<td>data inserted</td>
                <td>
                <br><br>
                <a href=\'curser_delete.php?id='.$row['id'].'\' onClick=\'return confirm("Are you sure you want to delete?")\'"><button class="btn-primary btn_del">Delete</button></a>
                </td> 
				</tr>';
} ?>
		
	</table>
	</div>
</body>
</html>