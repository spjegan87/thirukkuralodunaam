<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	$id= $_GET['id'];
	// Page Information
	$aboutcontent = $_POST['aboutcontent'];
	//Account Information
	$aname = $_POST['aname'];
	$position = $_POST['position'];
	$date = $_POST['date'];
	$aemail = $_POST['aemail'];
	$anumber = $_POST['anumber'];
	$alnumber = $_POST['alnumber'];
	// Photo Information
	$photo = $_POST['photo'];
	$imgtop = $_POST['imgtop'];
	$imgleft = $_POST['imgleft'];
	$photocontent = $_POST['photocontent'];
	
	//$id = "1";
	//$sql ="insert into aboutpage (id,aboutcontent,aname,position,date,aemail,anumber,alnumber,photo,photocontent) values ('$id','$aboutcontent','$aname','$position','$date','$aemail','$anumber','$anumber','$photo','$photocontent')";
	
	$sql ="UPDATE aboutpage SET aboutcontent='$aboutcontent',aname='$aname',position='$position',date='$date',aemail='$aemail',anumber='$anumber',alnumber='$alnumber',photo='$photo',imgtop='$imgtop',imgleft='$imgleft',photocontent='$photocontent' WHERE id='$id'";

	$directory = $_SERVER['DOCUMENT_ROOT']."/thirukkuralodunaam/admin/aboutuspagephotos/";

	$upload = $directory.$_FILES['photo']['name'];

	$moving = move_uploaded_file($_FILES['photo']['tmp_name'],$upload);

	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=updated');
	$_POST = "aboutuspage.php";
?>