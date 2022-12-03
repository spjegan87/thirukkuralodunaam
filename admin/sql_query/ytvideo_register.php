<?php
	ini_set('display_errors', '0');
	include('../../config/config.php');
	// Personal Information
	$ytname = $_POST['ytname'];
	$yturl = $_POST['yturl']; 
	$status = $_POST['status'];

	$sql ="insert into ytvideo_register (ytname,yturl,status) values ('$ytname','$yturl','$status')";

	$query = mysql_query($sql);
	
	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=ytvideoupdate');
?>