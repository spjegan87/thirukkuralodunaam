<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	
	$id= $_GET['id'];
	$newspapername = $_POST['newspapername'];
	$newstitle = $_POST['newstitle'];
	$date = $_POST['date'];
	$photo = $_POST['photo'];
	$newscontent = $_POST['newscontent'];
	$status = $_POST['status'];

	$sql ="UPDATE newspaper_register SET newspapername='$newspapername', newstitle='$newstitle', date='$date', photo='$photo', newscontent='".mysql_real_escape_string($newscontent)."', status='$status' WHERE id='".$id."'";

	$query = mysql_query($sql);
	//echo mysql_error($connect);
	
	if(isset($_FILES['photo']['name']) && !empty($_FILES['photo']['name'])) {
		$directory = $_SERVER['DOCUMENT_ROOT']."/admin/newsreport/";
		$upload = $directory.$_FILES['photo']['name'];
		$moving = move_uploaded_file($_FILES['photo']['tmp_name'],$upload);
	}
	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=newsupdate');
?>