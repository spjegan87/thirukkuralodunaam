<?php
	include('../../config/config.php');

	$username = mysql_real_escape_string($_POST["username"]);  
	$password = mysql_real_escape_string($_POST["password"]);  
	$password = md5($password);  

	$sql ="select * from admin_register where username='$username' and password='$password'";

	$query = mysql_query($sql);

	$result = mysql_num_rows($query);

	if($result == 1)
	{
		$_SESSION['username']=$username;
		header('location:'.$localpath.'/admin/templates/index.php?page=dashboard.php');

		if($uname == "admin")
		{
			header('location:'.$localpath.'/admin/templates/test.php');
		}
	}
	else
	{
		header('location:'.$localpath.'/admin/index.php?msg=error');
	}
?>