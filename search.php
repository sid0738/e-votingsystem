<?php
//include 'connection.php';
//Get data
session_start();
$login = $_GET['submit'];
$search = $_GET['search'];

$var = @$_GET['search'];
$trimmed = trim($var); // trim whitespace from the stored variable

//rows to return
$limit = 10;

//check for an empty string and display a message.
	if($trimmed==""){
	$msg="<h4><font color='#ff0000'>Please submit a search term.</h4></font>";
	include 'login_reg.php';
	exit;
	}
	
//check for search parameter
	if(!isset($var)){
	echo 'No search parameter';	
	exit;
	}	
	

include 'connection.php';
	
//SQL query.
$query = "SELECT DISTINCT * FROM student WHERE username LIKE '%$trimmed%' OR stud_id LIKE '%$trimmed%' ORDER BY username";

$result = mysql_query($query) or die (mysql_error().' Error:sql statement');

//$rows = mysql_num_rows($result) or die(mysql_error().' Error:mysql_num_rows statement');

	if(mysql_num_rows($result)==0){
	$msg="<h4><font color='#0000ff'>No Student with such name found.</h4></font>";
	include 'login_reg.php';
	exit;
	}
	else{
	include 'search_results.php';	
	
	}
	

?>

