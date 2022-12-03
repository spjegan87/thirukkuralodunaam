<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	
	$id= $_GET['id'];
	$ntitle = $_POST['ntitle'];
	$date = $_POST['date'];
	$ntime = $_POST['ntime'];
	$nplace = $_POST['nplace'];
	$ncontent = $_POST['ncontent'];
	$status = $_POST['status'];

	$sql ="UPDATE notification_register SET ntitle='$ntitle', date='$date', ntime='$ntime', nplace='$nplace', ncontent='".mysql_real_escape_string($ncontent)."', status='$status' WHERE id='".$id."'";

	$query = mysql_query($sql);
	//echo mysql_error($connect);
	
	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=nupdate');
?>