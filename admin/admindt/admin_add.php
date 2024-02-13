<?php require_once("../../Admin_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="edit.css">
	<title>Image Upload in PHP and MYSQL database</title>
</head>
<body>
	<?php
		if(isset($_POST['form_submit']))
		{	
			$id=$_POST['id'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password = md5($_POST['password']);
            $user_type = $_POST['user_type'];

if(!isset($error))
{

$result=mysqli_query($db,"INSERT INTO admin_login(id,name,email,password,user_type) VALUES('$id','$name','$email','$password','$user_type')"); 
if($result)
{
	header("location:admin_index.php?image_success=1");
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
	?> 
	<br>
	<a href="admin_index.php"><button class="b-bk-btn"><span class="g-bk">⬅<span></button></a>
		<h1 style="text-align:center;">UPLOAD DATA</h1>
    <form action="" method="POST" enctype="multipart/form-data" class="form-container">
		<table>
	<tr>		
    <td><label>ID</label></td>
	<td><input type="id" name="id" class="form-control"></td>
    </tr>
	<tr>
    <td><label>Name</label></td>
	<td><input type="text" name="name" class="form-control"></td>
    </tr>
    <td><label>EMAIL</label></td>
	<td><input type="email" name="email" class="form-control"></td>
	</tr>
	<tr>
	<td><label>password</label></td>
	<td><input type="password" name="password" value="" class="form-control"></td>
	</tr>
	<td><label>user type</td>
	<td>
	<select name="user_type">
         <option value="admin">admin</option>
      </select>
	  </td>
	  <tr>
		<td></td>
	  <td><button name="form_submit" class="btn-primary"> Upload</button></td>
</tr>
</table>
</form>
</div>
</body>
</html>