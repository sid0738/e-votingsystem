<?php 
include "admin_auth.php";
session_start();
include "admin_header.php";?>
<div id="cover">
<div id="content">
<h4>Hellow,&nbsp;<?php echo $_SESSION['SESS_NAME'] ;?><br /></h4>
<br/><h3>Students:</h3>
  <div id="login">
<?php
include'connection.php';
	$member=mysql_query("select * from student");
	if(mysql_num_rows($member)==0)
	{
		echo '<font color="red">No results found</font>';
	}
	else
	{
echo '<table><tr bgcolor="#FF6600">
<td width="100px">ID</td>		
<td width="100px">FIRSTNAME</td>
<td width="100px">LASTNAME</td>
<td width="100px">USERNAME</td>
<td width="100px">COURSE</td>
<td width="100px">YOS</td>
<td width="100px">STATUS</td>
</tr>';
 while($mb=mysql_fetch_object($member))
		{	
			$id=$mb->stud_id;
			$name=$mb->firstname;
			$name2=$mb->lastname;
			$name3=$mb->username;
			$course=$mb->course;
			$yos=$mb->yos;
			$status=$mb->status;
			echo '<tr bgcolor="#BBBEFF">';
	echo '<td>'.$id.'</td>';		
	echo '<td>'.$name.'</td>';
	echo '<td>'.$name2.'</td>';
	echo '<td>'.$name3.'</td>';
	echo '<td>'.$course.'</td>';
	echo '<td>'.$yos.'</td>';
	echo '<td>'.$status.'</td>';
	echo "<td><a href=delete.php?delete=".$id.">Delete</a></td>";
	echo "</tr>";
		}
		echo'</table>';
	}
?>

<h3>Candidate</h3>
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
	echo "<td width=2><a href=delete.php?delete=".$id.">Delete</a></td>";
	echo "</tr>";
		}
		echo'</table>';
	}
?>

<h3>Login users:</h3>
<?php
include'connection.php';
	$member=mysql_query("select * from login");
	if(mysql_num_rows($member)==0)
	{
		echo '<font color="red">No results found</font>';
	}
	else
	{
		echo '<table><tr bgcolor="#FF6600">
<td width="100px">ID</td>		
<td width="100px">USERNAME</td>
<td width="100px">RANK</td>
<td width="100px">STATUS</td>
<td width="100px">ACTION</td>
<td width="100px">DEACTIVATE/ACTIVATE</td>
</tr>';
 while($mb=mysql_fetch_object($member))
		{	
			$id=$mb->login_id;
			$name=$mb->username;
			$pos=$mb->rank;
			$about=$mb->status;
		
			echo '<tr bgcolor="#BBBEFF">';
	echo '<td>'.$id.'</td>';		
	echo '<td>'.$name.'</td>';
	echo '<td>'.$pos.'</td>';
	echo '<td>'.$about.'</td>';
	echo "<td><a href=delete.php?delete=".$name.">Delete</a></td>";
	echo "<td><a href=deactivate.php?deactivate=".$id.">Deactivate</a>/&nbsp;
			  <a href=activate.php?activate=".$id.">Activate</a></td></tr>";
		}
		echo'</table>';
	}
?>

        </div>
        

</div>
</div>
<?php include "footer.php";?>
