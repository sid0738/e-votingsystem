<?php 
//include "admin_auth.php";
session_start();
include "header_candidate.php";?>
<div id="cover">
<div id="content">
<h4>Hellow,&nbsp;<?php echo $_SESSION['SESS_NAME'] ;?><br /></h4>
  <div id="login">

<h3>Candidates and Votes</h3>
<?php
include'connection.php';
	$member=mysql_query("select * from candidate");
	if(mysql_num_rows($member)==0)
	{
		echo '<font color="red">No results found</font>';
	}
	else
	{
		echo '<table><tr bgcolor="#FF6600">
<td width="100px">ID</td>		
<td width="100px">FULLNAME</td>
<td width="100px">POSITION</td>
<td width="100px">ABOUT</td>
<td width="100px">VOTE</td>
</tr>';
 while($mb=mysql_fetch_object($member))
		{	
			$id=$mb->cand_id;
			$name=$mb->fullname;
			$pos=$mb->position;
			$about=$mb->about;
			$vote=$mb->votecount;
			echo '<tr bgcolor="#BBBEFF">';
	echo '<td>'.$id.'</td>';		
	echo '<td>'.$name.'</td>';
	echo '<td>'.$pos.'</td>';
	echo '<td>'.$about.'</td>';
	echo '<td>'.$vote.'</td>';
	echo "</tr>";
		}
		echo'</table>';
	}
?>

        </div>
        

</div>
</div>
<?php include "footer.php";?>
