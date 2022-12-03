<?php 
	ini_set('display_errors', '0');
	include('../../config/config.php');
	// Personal Information
	$ntitle = $_POST['ntitle'];
	$date = $_POST['date'];
	$ntime = $_POST['ntime'];
	$nplace = $_POST['nplace'];
	$ncontent = $_POST['ncontent'];
	$status = $_POST['status'];

	$sql ="insert into notification_register (ntitle,date,ntime,nplace,ncontent,status) values ('$ntitle','$date','$ntime','$nplace','".mysql_real_escape_string($ncontent)."','$status')";

	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=nupdate');
?>