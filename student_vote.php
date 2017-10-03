<?php
include "connection.php";
session_start();
$cand1	= $_POST['cand1'];
$cand2	= $_POST['vice1'];
$sess 	=  $_SESSION['SESS_NAME'] ;


if(!$cand1){
$error="<center><h4><font color='#FF0000'>Please fill empty fields</h4></center></font>";
include"student.php";
exit();
}

		
	//Adding the escape character
	$cand1 = addslashes($cand1);
	
	
	$cand1 = mysql_real_escape_string($cand1);
	
$sql = 'SELECT * FROM student WHERE username="'.$_SESSION['SESS_NAME'].'" AND status="VOTED"';
$result = mysql_query($sql);

			if (mysql_num_rows($result)==1){
	    //Login User already voted:
	   // echo $cand1;
        $msg="<center><h4><font color='#FF0000'>You have already been voted, No need to vote again</h4></center></font>";
		include 'student.php';
		exit();	
	        }
					
			else{
			
			 $sql = 'UPDATE candidate SET votecount = votecount + 1 WHERE cand_id = "'.$_POST['cand1'].'" OR cand_id = "'.$_POST['vice1'].'"';
         
            $sql2 = 'UPDATE student SET status="VOTED" WHERE username="'.$_SESSION['SESS_NAME'].'"';
               

            $result = mysql_query($sql);
            $result2 = mysql_query($sql2);

	if(!$result && !$result2){
	die("Error on mysql query".mysql_error());
	}
	else{
	$msg="<center><h4><font color='#FF0000'>Congratulation, you have made your vote.</h4></center></font>";
	include 'student.php';
	exit();
	}
			}
	
	
?>
