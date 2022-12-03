<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	// Personal Information
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$dob = $_POST['date'];
	$gender = $_POST['gender'];
	$bloodgroup = $_POST['bg'];

	//Account Information
	$emailid = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sequestion = $_POST['securityquest'];
	$seqanwser = $_POST['seqanswer'];

	//Contact Information
	$address = $_POST['addr'];
	$contactno = $_POST['phoneno'];
	$emercontactno = $_POST['emerphoneno'];
	$photo = $_FILES['photo']['name'];
	$status = $_POST['status'];
	
	//Group Information
	$doj = $_POST['dateofjoin'];
	$actplace = $_POST['activeplace'];
	$reason = $_POST['reason'];
	$usertype = $_POST['usertype'];

	$sql ="insert into admin_register (fname,lname,date,gender,bg,email,username,password,securityquest,seqanswer,addr,phoneno,emerphoneno,photos,status,doj,actplace,reason,usertype) values ('$fname','$lname','$dob','$gender','$bloodgroup','$emailid','$username',MD5('$password'),'$sequestion','$seqanwser','$address','$contactno','$emercontactno','$photo','$status','$doj','$actplace','$reason','$usertype')";

	$directory = $_SERVER['DOCUMENT_ROOT']."/MyLearning/wecandoit/admin/userphotos/";
	
	$upload = $directory.$_FILES['photo']['name'];

	$moving = move_uploaded_file($_FILES['photo']['tmp_name'],$upload);
	
	$query = mysql_query($sql);
	
	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=thanks');
?>