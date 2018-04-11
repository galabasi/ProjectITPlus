<?php  
	ob_start();
	session_destroy();
	header("login.php");
?>