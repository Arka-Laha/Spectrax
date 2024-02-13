<?php require_once("../../Admin_config.php"); 
$id=$_GET['id'];

$result=mysqli_query($db,"DELETE from admin_login WHERE id=$id") ; 
if($result)
{
	 header("location:admin_index.php?action=deleted");
}
?>