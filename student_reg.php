<?php include "header.php";?>
<div id="cover">
<div id="content">
<br/><h3>Registration</h3>
  <div id="login">
        <fieldset>
            <legend><h3> Registration Form</h3></legend>
  <h4 style="color:#e60808;">
  <?php global $nam; echo $nam;?> </h4> 
  <?php global $error; echo $error;?>                  
			<!-- the login form-->
<form action="reg1_action.php" method="post" id="myform">
                <div class="login">
				<table width="400px">
<tr><td><label>Firstname</label></td>
    <td><input type="text" name="firstname" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td><label>Lastname</label></td>
    <td><input type="text" name="lastname" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td><label>Username</label></td>
    <td><input type="text" name="username" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td><label>Password</label></td>
    <td><input type="password" name="password" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr>
    <td><label>State</label></td>
    <td><select name="course" id="course" style="width:250px; height:34px; border:1px solid #336666;">
    <option value="000">Select State</option>
    <option value="BCS">Maharashtra</option>
    <option value="IT">Goa</option>
    <option value="ACC">Gujarat</option>
    <option value="INS">kerala</option></select>




</td>
</tr>
<tr><td><label>Phone no.</label></td>
    <td><input type="text" name="stud_id" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr>
    <td><label>Occupation</label></td>
    <td><select name="yos" id="yos" style="width:250px; height:34px; border:1px solid #336666;">
    <option value="000">Select Occupation</option>
    <option value="Bussiness">Bussiness men</option>
    <option value="Govt_Empl">Govt. Employee</option>
    <option value="Farmer">Farmer</option>
    <option value="stud">Student</option>
    <option value="Other">Other</option></select>
</td>
</tr>
<tr><td colspan="2" align="left"><input type="submit" name="submit" value="Next" style="width:100px; height:34px; border:1px solid #336666; border-radius:4px;"></td></tr>
				 </table>
			    </div>
</form>
<script type="text/javascript">
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("firstname","req","Please enter student firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter student lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter student username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter student password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");
 frmvalidator.addValidation("course","req","Please enter student course"); 
 frmvalidator.addValidation("course","dontselect=000","You don't select course");
 frmvalidator.addValidation("stud_id","req","Please enter your registration number"); 
 frmvalidator.addValidation("stud_id","maxlen=50");
 frmvalidator.addValidation("yos","req","Please enter year of study"); 
 frmvalidator.addValidation("yos","dontselect=000","You don't select Year Of study");
</script>
        </fieldset>
        </div>
</div>
</div>
<?php include "footer.php";?>
