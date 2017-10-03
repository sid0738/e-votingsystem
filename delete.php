<?php
	include'connection.php';
if($_GET['delete'])
{
	$query=mysql_query("DELETE FROM student WHERE stud_id='".$_GET['delete']."'");
	$query=mysql_query("DELETE FROM login WHERE username='".$_GET['delete']."'");
	$query=mysql_query("DELETE FROM candidate WHERE cand_id='".$_GET['delete']."'");
	if($query)
	{
		header('location:users.php');
	}
}
?>
