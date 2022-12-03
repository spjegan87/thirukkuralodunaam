<?php
	ini_set('display_errors', '0');
	include('../../config/config.php');
	// Personal Information
	$thirukkuralpirivu = $_POST['thirukkuralpirivu'];
	$kuralathikaram = $_POST['kuralathikaram'];
	$tno = $_POST['tno'];
	$tkural = $_POST['tkural'];
	$tmeaning = $_POST['tmeaning'];
	$status = $_POST['status'];

	$sql ="insert into thirukkural (thirukkuralpirivu,kuralathikaram,tno,tkural,tmeaning,status) values ('$thirukkuralpirivu','$kuralathikaram','$tno','$tkural','$tmeaning','$status')";

	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=kuralupdate');
?>