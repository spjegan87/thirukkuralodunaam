<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	
	$id= $_GET['id'];
	$wtitle = $_POST['wtitle'];
	$wkeywords = $_POST['wkeywords'];
	$wdescription = $_POST['wdescription'];
	$status = $_POST['status'];

	$sql ="UPDATE keywords_register SET wtitle='".mysql_real_escape_string($wtitle)."', wkeywords='".mysql_real_escape_string($wkeywords)."', wdescription='".mysql_real_escape_string($wtitle)."', status='$status' WHERE id='".$id."'";

	$query = mysql_query($sql);
	//echo mysql_error($connect);
	
	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=kupdate');
?>