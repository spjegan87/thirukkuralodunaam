<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	
	$id= $_POST['delete'];
	
	$sql ="UPDATE service_register SET status='N' WHERE id='".$id."'";

	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=allservices.php&msg=servicedelete');
?>