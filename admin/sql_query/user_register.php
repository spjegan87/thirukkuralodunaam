<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');

	$name = $_POST['fname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$usertype = 'normal';

	$sql ="insert into admin_register (fname,username,password,email,usertype) values ('$name','$username',MD5('$password'),'$email','$usertype')";

	$query = mysql_query($sql);

	//header($directory.'/thanks.php');
	//$localpath = "http://".$_SERVER['HTTP_HOST']."/MyLearning/wecandoit";
	header('location:'.$localpath.'/thanks.php');
?>