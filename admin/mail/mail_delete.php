<?php require_once("../../Admin_config.php"); 
$id=$_GET['id'];

$result=mysqli_query($db,"DELETE from mail WHERE id=$id") ; 
if($result)
{
	 header("location:mail_index.php?action=deleted");
}
?>