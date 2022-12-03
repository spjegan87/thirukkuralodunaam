<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	$id= $_GET['id'];
	// Page Information
	$btitle = $_POST['btitle'];
	$bcontent = $_POST['bcontent'];
	//Thiruvalluvar Information
	$atcontent = $_POST['atcontent'];
	
	//$id = "1";
	//$sql ="insert into homepage (id,btitle,bcontent,atcontent) values ('$id','$btitle','$bcontent','$atcontent')";
	
	$sql ="UPDATE homepage SET btitle='$btitle',bcontent='$bcontent',atcontent='$atcontent' WHERE id='$id'";

	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=hupdated');
?>