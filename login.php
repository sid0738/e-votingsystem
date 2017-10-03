<?php include "header.php";?>
<div id="cover">
<div id="content">
<br/><h3>System Login</h3>
  <div id="login">
        <fieldset>
            <legend><h3>Login Form</h3></legend>
  <h4 style="color:#e60808;"><?php global $nam; echo $nam;?> </h4> 
  <?php global $error; echo $error;?>                  
			<!-- the login form-->
<form action="login_action.php" method="post" id="myform">
                <div class="login">
				<table width="400px">
<tr><td><label>Username</label></td>
    <td><input type="text" name="username" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td><label>Password</label></td>
    <td><input type="password" name="password" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td colspan="2" align="left"><input type="submit" name="login" value="Login" style="width:100px; height:34px; border:1px solid #336666; border-radius:4px;"></td></tr>
				 </table>
			    </div>
</form>
<script type="text/javascript">
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("username","req","Please enter student username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter student password"); 
</script>
        </fieldset>
        </div>

</div>
</div>
<?php include "footer.php";?>
