 <?php
     
include "connection.php";

$name 		= $_POST['ans'];
$id  		= $_POST['qn_id'];




if(!$name){
$error="Please fill empty fields";
include"answer.php";
exit();
}


$sql = 'UPDATE questions SET ans="'. $_POST['ans'].'" WHERE qn_id="'. $_POST['qn_id'].'"';
        
         
      // if($rank=='candidate'){
       //include 'reg_cand.php';
       //}

$result = mysql_query($sql);

	if(!$result){
	die("Error on mysql query".mysql_error());
	}
	else{
	include "candidate.php";
	}
                
 ?>

