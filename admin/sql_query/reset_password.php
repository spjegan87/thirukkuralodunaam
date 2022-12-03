<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	// Personal Information
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "UPDATE admin_register SET password='".MD5($password)."' WHERE email='$email'";
	$query = mysql_query($sql);
	
	header('location:'.$localpath.'/admin/index.php?msg=reseted');
?>