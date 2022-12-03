<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	// Personal Information
	$servicename = $_POST['servicename'];
	$servicedate = $_POST['servicedate'];
	$photo = $_FILES['photo']['name'];
	$servicecomments = $_POST['servicecomments'];
	$status = $_POST['status'];

	$sql ="insert into service_register (servicename,servicedate,photo,servicecomments,status) values ('$servicename','$servicedate','$photo','$servicecomments','$status')";
	 
	$directory = $_SERVER['DOCUMENT_ROOT']."/thirukkuralodunaam/admin/servicephotos/";
	
	$upload = $directory.$_FILES['photo']['name'];

	$moving = move_uploaded_file($_FILES['photo']['tmp_name'],$upload);
	
	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=serviceupdate');
?>