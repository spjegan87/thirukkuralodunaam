<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');

	$id= $_POST['delete'];
	$sql ="UPDATE duwords SET status='Inactive' WHERE id='".$id."'";

	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=updateuwords');
?>