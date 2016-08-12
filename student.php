<?php 
//include "admin_auth.php";
session_start();
include "nav_student.php";?>
<div id="container">
<div id="content">
<h4>Hellow,&nbsp;<?php echo $_SESSION['SESS_NAME'] ;?><br /></h4>
<br/><h3 align="center">Make a vote.</h3>
  <div id="login">
<table width="100%">
<form action="student_vote.php" name="vote" method="post" id="myform">
<tr>
<td align="center">
<input type="radio" name="cand1" value="1" size="10"/>Ansul-Leader<br/><br/>
<input type="radio" name="cand1" value="2" size="10"/>Ashish-Leader<br/><br/>
<input type="radio" name="cand1" value="3" size="10"/>Ankit -Leader<br/><br/>
<input type="radio" name="cand1" value="4" size="10"/>Sahil -Leader<br/><br/>

</td>

</tr>
<tr>
<td align="left">&nbsp;</td>
<td align="left"><?php global $msg; echo $msg;?>
                <?php global $error; echo $error;?>
</td>
</tr>

<tr align="center">
<td align="center" ><input type="submit" value="MAKE A VOTE" name="submit"
style="color:#22211f;"/></td>
</tr>
</form>
<script type="text/javascript">
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("cand1","req","Please select leader candidate to vote for.");
 
</script>
</table>
        </div>

</div>
</div>
<?php include "footer.php";?>
