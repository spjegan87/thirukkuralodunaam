<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	
	$id= $_GET['id'];
	$fname = $_POST['fname'];
	$fmessage = $_POST['fmessage'];
	$status = $_POST['status'];

	$sql ="UPDATE footer_comment SET fname='$fname', status='$status', fmessage='".mysql_real_escape_string($fmessage)."' WHERE id='".$id."'";

	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=allcomments.php&msg=commentsupdate');
?>