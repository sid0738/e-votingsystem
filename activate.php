<?php
	include'connection.php';
if($_GET['activate'])
{
	$query=mysql_query("UPDATE login SET status='ACTIVE' WHERE login_id='".$_GET['activate']."'");
	if($query)
	{
		header('location:users.php');
	}
}
?>
