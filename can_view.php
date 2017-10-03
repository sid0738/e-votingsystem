<?php 
//include "admin_auth.php";
session_start();
include "header_student.php";?>
<div id="cover">
<div id="content">
<h3>Candidate Profiles</h3>
<?php
include'connection.php';
	$member=mysql_query("select * from candidate");
	if(mysql_num_rows($member)==0)
	{
		echo '<font color="blue">No results found</font>';
	}
	else
	{
		echo '<table><tr bgcolor="#FF6600">
<td width="100px">ID</td>		
<td width="100px">FULLNAME</td>
<td width="100px">POSITION</td>
<td width="100px">ABOUT</td>

</tr>';
 while($mb=mysql_fetch_object($member))
		{	
			$id=$mb->cand_id;
			$name=$mb->fullname;
			$pos=$mb->position;
			$about=$mb->about;
			
			echo '<tr bgcolor="#0A67B7">';
	echo '<td>'.$id.'</td>';		
	echo '<td>'.$name.'</td>';
	echo '<td>'.$pos.'</td>';
	echo '<td>'.$about.'</td>';
	
	
	echo "</tr>";
		}
		echo'</table>';
	}
?>

        </div>

</div>
</div>
<?php include "footer.php";?>
