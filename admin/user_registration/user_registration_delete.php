<?php require_once("../../Admin_config.php"); 
$id=$_GET['id'];

$result=mysqli_query($db,"DELETE from registration WHERE id=$id") ; 
if($result)
{
	 header("location:user_registration_index.php?action=deleted");
}
?>