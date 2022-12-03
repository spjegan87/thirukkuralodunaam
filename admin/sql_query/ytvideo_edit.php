<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	
	$id= $_GET['id'];
	$ytname = $_POST['ytname'];
	$yturl = $_POST['yturl']; 
	$status = $_POST['status'];

	$sql ="UPDATE ytvideo_register SET ytname='$ytname', yturl='$yturl', status='$status' WHERE id='".$id."'";

 	$query = mysql_query($sql);
	//echo mysql_error($connect);
	
	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=ytvideoupdate');
?>