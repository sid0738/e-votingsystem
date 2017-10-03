<?php 
include "admin_auth.php";
session_start();
include "admin_header.php";?>
<div id="cover">
<div id="content">
<form name='search' action='#'>
        <p>
                <label for="keywords">Search:</label><br>
                <input type="text" name="keywords" id="keywords" value="" size="18" maxlength="100">
                <input type="submit" value="search" class="submit">
        </p>
</form>
<h4>Hellow,&nbsp;<?php echo $_SESSION['SESS_NAME'] ;?><br /></h4>
<br/><h3>Registration</h3>
 
                <h2><a href="reserved.php">Student Search Results:</a></h2><hr size="5"/>
                
                <?php
							include 'connection.php';
							
							$sql="SELECT firstname,lastname,username,course,yos,status,stud_id FROM student WHERE username='$trimmed' OR firstname='$trimmed' OR stud_id='$trimmed' ORDER BY firstname ";
							$result=mysql_query($sql) or die(mysql_error());

										?>
										<h3>
<?php print "<table width=700 border=1 align=center cellspacing=0 cellpadding=0> \n";?>
   <?php 
 	print "<tr class=text4 height='25' bgcolor=#666666>";
	print "<th>FIRSTNAME</th> &nbsp;";
	print "<th>LASTNAME</th>";
	print "<th>USERNAME</th>";
	print "<th>COURSE</th>";
	print "<th>YOS</th>";
	print "<th>STATUS</th>";
	
	print "</tr>";
	
	?>
    <?php 
while ($Dir=mysql_fetch_array($result)) {

$fname 			= $Dir["firstname"];
$lname		 	= $Dir["lastname"];
$uname          = $Dir["username"];
$course 		= $Dir["course"];
$yos 			= $Dir["yos"];
$status 		= $Dir["status"];
$id 		    = $Dir["stud_id"];



	 echo("<tr>");
	 echo("<td>$fname");
	 echo("<td>$lname");
	 echo("<td width='50'>$uname");
  	 echo("<td width='20'>$course");
  	  echo("<td width='20'>$yos");
  	   echo("<td width='20'>$status");
  	   	echo "<td><a href=delete.php?delete=".$id.">Delete</a></td>";

	
echo("</tr>");
}
print "</table>";		
 ?>

     
</div>
</div>
<?php include "footer.php";?>
