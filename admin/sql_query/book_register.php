<?php
	ini_set('display_errors', '0');
	include('../../config/config.php');
	// Personal Information
	$bookname = $_POST['bookname'];
	$date = $_POST['date'];
	$photo = str_replace(" ", "", $_FILES['photo']['name']);
	$bformat = str_replace(" ", "", $_FILES['bformat']['name']);
	$bookcontent = $_POST['bookcontent'];
	$status = $_POST['status'];

	$sql ="insert into book_register (bookname,date,photo,bformat,bookcontent,status) values ('$bookname','$date','$photo','$bformat','".mysql_real_escape_string($bookcontent)."','$status')";

	$directory = $_SERVER['DOCUMENT_ROOT']."/admin/books/";
	
	$upload = $directory.str_replace(" ", "", $_FILES['photo']['name']);
	$uploadbook = $directory.str_replace(" ", "", $_FILES['bformat']['name']);

	$moving = move_uploaded_file($_FILES['photo']['tmp_name'],$upload);
	$movingbook = move_uploaded_file($_FILES['bformat']['tmp_name'],$uploadbook);
	
	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=bookupdate');
?>