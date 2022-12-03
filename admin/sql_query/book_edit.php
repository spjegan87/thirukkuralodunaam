<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	
	$id= $_GET['id'];
	$bookname = $_POST['bookname'];
	$date = $_POST['date'];
	$photo = str_replace(" ", "", $_POST['photo']);
	$bformat = str_replace(" ", "", $_POST['bformat']);
	$bookcontent = $_POST['bookcontent'];
	$status = $_POST['status'];

	$sql ="UPDATE book_register SET bookname='$bookname', date='$date', photo='$photo', bformat='$bformat', bookcontent='".mysql_real_escape_string($bookcontent)."', status='$status' WHERE id='".$id."'";
	

	$query = mysql_query($sql);
	//echo mysql_error($connect);
	
	if(isset($_FILES['photo']['name']) && !empty($_FILES['photo']['name'])) {
		$directory = $_SERVER['DOCUMENT_ROOT']."/admin/books/";
		$upload = $directory.str_replace(" ", "", $_FILES['photo']['name']);
		$moving = move_uploaded_file($_FILES['photo']['tmp_name'],$upload);
	}

	if(isset($_FILES['bformat']['name']) && !empty($_FILES['bformat']['name'])) {
		$directory = $_SERVER['DOCUMENT_ROOT']."/admin/books/";
		$upload = $directory.str_replace(" ", "", $_FILES['bformat']['name']);
		$moving = move_uploaded_file($_FILES['bformat']['tmp_name'],$upload);
	}
	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=bookupdate');
?>