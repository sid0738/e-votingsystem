 <?php
     
include "connection.php";


$name 		= $_POST['stud_id'];

$rank	    = $_POST['rank'];




if(!$name || !$rank)
{
$error="Please fill empty fields";

include"login_reg.php";

exit();

}



$sql = 'UPDATE  login
         
SET rank="'.$_POST['rank'].'" 
WHERE username="'.$_POST['stud_id'].'"';
 
        
      // if($rank=='candidate')
{
       //include 'reg_cand.php';
      
 //}


$result = mysql_query($sql);


	if(!$result && !$result2)
{
	die("Error on mysql query".mysql_error());
	}

	else{

$nam="<center><h4><font color='#00FF00'>Successful update,</h4></center></font>";

	include "login_reg.php";
	}
?>


