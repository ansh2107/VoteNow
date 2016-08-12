<?php
include "connection.php";
session_start();
$username1	= $_POST['cusername'];

$pass 		= md5($_POST['password']);


if(!$username1 || !$pass ){
$error="Please fill empty fields";
include"change_pass.php";
exit();
}

		
	//Adding the escape character
	
	$password = addslashes($pass);
	
	
	
	$password = mysql_real_escape_string($pass);
	
$sql = 'SELECT * FROM login WHERE username="'.$_POST['cusername'].'" AND status="ACTIVE"';
$result = mysql_query($sql);

			if (mysql_num_rows($result)==1){
	    //Username Successful
		$sql = 'UPDATE login SET 
		                         password="'.md5($_POST['password']).'"
		        WHERE username="'.$_POST['cusername'].'"' ;
        $result = mysql_query($sql);
        $msg="Password Successful changed";
        include "change_pass.php";
			
	        }
					
			else{
			$error="Incorrect username or password";
			include "change_pass.php";
			//exit();
			}
	
	
?>
