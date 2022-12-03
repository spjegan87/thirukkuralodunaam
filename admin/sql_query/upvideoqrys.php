<?php
	ini_set('display_errors', '1');
	ini_set('max_execution_time', 36000);
	include('../../config/config.php');
	// Thirukkural Information
	$kuralno = $_POST['kuralno'];
	$kuralathikaram = $_POST['kuralathikaram'];
	$photo = $_FILES['photo']['name'];
	$status = "Active";

	$sql ="insert into kuralvideo (kuralno,kuralathikaram,kuralvideo,status) values ('$kuralno','$kuralathikaram','$photo','$status')";

	$directory = $_SERVER['DOCUMENT_ROOT']."/thirukkuralodunaam/admin/videos/";
	
	$upload = $directory.$_FILES['photo']['name'];

	$moving = move_uploaded_file($_FILES['photo']['tmp_name'],$upload);
	
	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=vthanks');
?>
