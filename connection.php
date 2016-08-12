<?php
$host="localhost";
$user="cl57-poll";
$pass="poll";
$db = "cl57-poll";

$con = mysql_connect($host,$user,$pass);
$db = mysql_select_db($db);

if(!$con){
die("Connection Error".mysql_error());
}

?>

