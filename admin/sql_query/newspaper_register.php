<?php
	ini_set('display_errors', '0');
	include('../../config/config.php');
	// Personal Information
	$newspapername = $_POST['newspapername'];
	$newstitle = $_POST['newstitle'];
	$date = $_POST['date'];
	$photo = $_FILES['photo']['name'];
	$newscontent = $_POST['newscontent'];
	$status = $_POST['status'];

	$sql ="insert into newspaper_register (newspapername,newstitle,date,photo,newscontent,status) values ('$newspapername','$newstitle','$date','$photo','".mysql_real_escape_string($newscontent)."','$status')";


	$directory = $_SERVER['DOCUMENT_ROOT']."/admin/newsreport/";
	
	$upload = $directory.$_FILES['photo']['name'];

	$moving = move_uploaded_file($_FILES['photo']['tmp_name'],$upload);
	
	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=newsupdate');
?>