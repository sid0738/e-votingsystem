 <?php
     
include "connection.php";

$name 		= $_POST['display_name'];
$cand   	= $_POST['cand_id'];
$qn	    = $_POST['qn'];



if(!$name || !$qn){
$error="Please fill empty fields";
include"question.php";
exit();
}


$sql = 'INSERT INTO questions(display_name,cand_id,qn)
         VALUES("'.$_POST['display_name'].'","'.$_POST['cand_id'].'","'.$_POST['qn'].'")';
         
      // if($rank=='candidate'){
       //include 'reg_cand.php';
       //}

$result = mysql_query($sql);

	if(!$result && !$result2){
	die("Error on mysql query".mysql_error());
	}
	else{
	include "question.php";
	}
                
 ?>

