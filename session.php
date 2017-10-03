<?php
	session_start();
	if (isset($_SESSION['timeout'])) {	
		
		if ($_SESSION['timeout'] + 2 * 60 < time()){
			session_destroy();
		}
	}
	else {
		$_SESSION['timeout']=time();
	}
?>
