<?php
include "connection.php";
session_start();
$username	= $_POST['username'];
$pass 		= md5($_POST['password']);


if(!$username || !$pass){
$error="Please fill empty fields";
include"login.php";
exit();
}

		
	//Adding the escape character
	$username = addslashes($username);
	$password = addslashes($pass);
	
	
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($pass);
	
$sql = 'SELECT * FROM login WHERE username="'.$_POST['username'].'" AND password="'.md5($_POST['password']).'"
AND status="ACTIVE"';
$result = mysql_query($sql);

			if (mysql_num_rows($result)==1){
	    //Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['login_id'];
			$_SESSION['SESS_NAME'] 		= $member['username'];
			$_SESSION['SESS_RANK'] 	    = $member['rank'];
			session_write_close();
			
			if($member['rank']=='administrator'){
			header("location: login_reg.php");
			}
			
			else if($member['rank']=='student'){
			header("location: student.php");
			}
			else if($member['rank']=='candidate'){
			header("location: candidate.php");
			}
			
	        }
					
			else{
			$error="Incorrect username or password";
			include "login.php";
			//exit();
			}
	
	
?>
