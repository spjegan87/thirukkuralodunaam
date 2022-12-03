<?php
echo '<pre>';
	ini_set('display_errors', '0');
	include('../../config/config.php');
	//print_r($_POST);
	//exit;
	/* Create a fodler 
	$gallerytitle = $_POST['gallerytitle'];
	$gallerystatus = $_POST['status'];
	foreach($_POST as $key => $value){
		if(strpos($key, 'photo') !== false){
			$photo[] = $value;
		}
		if(strpos($key, 'gallerytext')!== false)
		{
			$gallerytext[] = $value;
		}
	}*/
	$gallerytitle = $_POST['gallerytitle'];
	$gallerytext = $_POST['gallerytext'];
	$photo = str_replace(" ", "", $_POST['photo']);
	$photo1 = str_replace(" ", "", $_POST['photo1']);
	$photo2 = str_replace(" ", "", $_POST['photo2']);
	$photo3 = str_replace(" ", "", $_POST['photo3']);
	$photo4 = str_replace(" ", "", $_POST['photo4']);
	$gallerystatus = $_POST['status'];
	
	$sql = "insert into gallery_register (gallerytitle,gallerytext,photo,photo1,photo2,photo3,photo4,status)
	values ('$gallerytitle','$gallerytext','$photo','$photo1','$photo2','$photo3','$photo4','$gallerystatus')";
	
	//$directory = $_SERVER['DOCUMENT_ROOT']."/admin/galleryphotos/";
	
	$directory = $_SERVER['DOCUMENT_ROOT']."/admin/galleryphotos/";

	//$upload = $directory.''.date('dmYHs').'.jpg';
	$upload = $directory.str_replace(" ", "", $_FILES['photo']['name']);
	$upload1 = $directory.str_replace(" ", "", $_FILES['photo1']['name']);
	$upload2 = $directory.str_replace(" ", "", $_FILES['photo2']['name']);
	$upload3 = $directory.str_replace(" ", "", $_FILES['photo3']['name']);
	$upload4 = $directory.str_replace(" ", "", $_FILES['photo4']['name']);

	$moving = move_uploaded_file($_FILES['photo']['tmp_name'], $upload);
	$moving = move_uploaded_file($_FILES['photo1']['tmp_name'], $upload1);
	$moving = move_uploaded_file($_FILES['photo2']['tmp_name'], $upload2);
	$moving = move_uploaded_file($_FILES['photo3']['tmp_name'], $upload3);
	$moving = move_uploaded_file($_FILES['photo4']['tmp_name'], $upload4);
	
	$query = mysql_query($sql);
	header('location:'.$localpath.'/admin/templates/index.php?page=allgallery.php&msg=imgupdate');
?>