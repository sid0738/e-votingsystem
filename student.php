<?php 
//include "admin_auth.php";
session_start();
if (isset($_SESSION['timeout'])) {	
		
		if ($_SESSION['timeout'] + 1 * 60 < time()){
			session_destroy();
		}
	}
	else {
		$_SESSION['timeout']=time();
	}
include "header_student.php";?>
<div id="cover">
<div id="content">

<br/><h3>Make a vote for the President of USA.</h3>
  <div id="login">
<table width="100%">
<form action="student_vote.php" name="vote" method="post" id="myform">
<tr>
<td align="left"><img src="candidates/trump.jpg" width="300px" height="200px"></td>

<td><h1><input type="radio" name="cand1" value="1" size="10"/>Donald Trump -President</h1><br/><br/></td>
</tr>
<tr>
<td align="left"><img src="candidates/clinton.jpg" width="300px" height="200px"></td>

<td><h1><input type="radio" name="vice1" value="3" size="10"/>Hillary Clinton -President</h1><br/></td>
</tr>
<tr>
<td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td align="left"><?php global $msg; echo $msg;?>
                <?php global $error; echo $error;?>
</td>
</tr>

<tr>
<td align="center"><h2><input type="submit" value="MAKE A VOTE" name="submit"/></h2></td>
</tr>
</form>
<script type="text/javascript">
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("cand1","req","Please select president candidate to vote for.");
 frmvalidator.addValidation("vice1","req","Please select vice candidate to vote for.");  
</script>
</table>
        </div>

</div>
</div>
<?php include "footer.php";?>
