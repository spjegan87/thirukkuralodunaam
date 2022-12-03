<?php
	ini_set('display_errors', '1');
	$connect = mysqli_connect("localhost","root","","thirukkuralodunaam");
	if(isset($_POST["username"]))
	{
		echo $_POST["username"];
		$username = mysqli_real_escape_string($connect, $_POST["username"]);
		$query = "SELECT * FROM admin_register WHERE username='".$username."'";
		//echo $query;
		$result  = mysqli_query($connect,$query);
		if(mysqli_num_rows($result) == 0){
			echo "OK";
		}
		else
		{
			echo "Already exits";
		}
	}
?>