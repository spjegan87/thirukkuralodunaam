<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	$id= $_GET['id'];
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
	$photo = $_POST['photo'];
	$status = $_POST['status'];

	//Group Information
	$staus = $_POST['status'];

	$sql ="UPDATE admin_register SET fname='$fname',lname='$lname',date='$dob',gender='$gender',bg='$bloodgroup',email='$emailid',username='$username',password='$password',securityquest='$sequestion',seqanswer='$seqanwser',addr='$address',phoneno='$contactno',photos='$photo',status='$status' WHERE id='$id' ";

	$directory = $_SERVER['DOCUMENT_ROOT']."/thirukkuralodunaam/admin/userphotos/";

	$upload = $directory.$_FILES['photo']['name'];

	$moving = move_uploaded_file($_FILES['photo']['tmp_name'],$upload);
	
	$query = mysql_query($sql);
	
	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=updated');
?>