<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	$id= $_GET['id'];
	// Page Information
	$kuralno = $_POST['kuralno'];
	$kuralathikaram = $_POST['kuralathikaram'];
	$photo = $_POST['photo'];
	$status = "Active";

	$sql ="UPDATE kuralvideo SET kuralno='$kuralno', kuralathikaram='$kuralathikaram', kuralvideo='$photo',status='$status' WHERE id='$id'";

	$directory = $_SERVER['DOCUMENT_ROOT']."/admin/videos/";
	
	$upload = $directory.$_FILES['photo']['name'];

	$moving = move_uploaded_file($_FILES['photo']['tmp_name'],$upload);
	
	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=vthanks');
?>