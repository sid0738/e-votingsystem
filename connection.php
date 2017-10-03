<?php
$host="localhost";
$user="root";
$pass="";
$db = "poll";

$con = mysql_connect($host,$user,$pass);
$db = mysql_select_db($db);

if(!$con){
die("Connection Error".mysql_error());
}

?>

