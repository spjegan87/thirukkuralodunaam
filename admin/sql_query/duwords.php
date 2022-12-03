<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	// Page Information
	$uwords = $_POST['uwords'];
	$status = "Active";
	
	$sql ="insert into duwords (uwords,status) values ('$uwords','$status')";
	
	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=updateuwords');
?>