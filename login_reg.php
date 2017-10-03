<?php 
include "admin_auth.php";
session_start();
include "admin_header.php";?>
<div id="cover">
<div id="content">
<form name='search' action='search.php'>
        <p>
                <label for="keywords">Search:</label><br>
                <input type="text" name="search" id="search" value="" size="18" maxlength="100">
                <input type="submit" value="search" class="submit">
        </p>
</form>
<?php global $msg; echo $msg;?>
<h4>Hellow,&nbsp;<?php echo $_SESSION['SESS_NAME'] ;?><br /></h4>
<br/><h3>Registration</h3>
  <div id="login">
        <fieldset>
            <legend><h3>Update Form</h3></legend>
  <h4 style="color:#e60808;"><?php global $nam; echo $nam;?> </h4> 
  <?php global $error; echo $error;?>                  
			<!-- the login form-->
<form action="login_reg_action.php" method="post" id="myform">
                <div class="login">
				<table width="400px">
			
<tr>
<td><label>Username</label></td>
   <td colspan="2"><span class="style8">
     <div align="center">
          <?php
          include 'connection.php';
		  $sele=mysql_query("SELECT * FROM student ORDER BY firstname ");
		  ?>
          <select name="stud_id" style="width:250px; height:34px; border:1px solid #336666;">
            <option value="000" > [SELECT STUDENT]</option>
            <?php
	       while($numu=mysql_fetch_array($sele))
		   {
		  ?>
            <option value="<?php echo $numu['stud_id'];?> "> <?php echo $numu["stud_id"];echo'  -  ';echo $numu["firstname"] ?></option>
            <?php
		  }
		  ?>
          </select>
          </label>
          </div>
    </td>

</tr>
<tr>
    <td><label>Rank</label></td>
    <td><select name="rank" id="rank" style="width:250px; height:34px; border:1px solid #336666;">
    <option value="000">Choose user rank</option>
    <option value="student">Student</option>
    <option value="candidate">Candidate</option>
    <option value="administrator">Administrator</option>
    </select></td>
</tr>
<tr><td colspan="2" align="left"><input type="submit" name="register" value="Update" style="width:100px; height:34px; border:1px solid #336666; border-radius:4px;"></td></tr>
				 </table>
			    </div>
</form>
<script type="text/javascript">
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("username","req","Please enter student username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("rank","dontselect=000","You don't select rank");
</script>
        </fieldset>
        </div>

</div>
</div>
<?php include "footer.php";?>
