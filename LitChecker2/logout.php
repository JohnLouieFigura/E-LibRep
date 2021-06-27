<?php
	session_start();
	session_unset();
	session_destroy();
	$_SESSION['user_id'] = "";
	$_SESSION['user_name'] = "";
	$_SESSION['user_password'] = "";
	$_SESSION['logged_in'] = false;
	header('Location: index.php');
?>