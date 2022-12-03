<?php
	ini_set('display_errors', '1');
	$connect = mysqli_connect("localhost","root","","thirukkuralodunaam");
	if(isset($_POST["tno"]))
	{
		$username = mysqli_real_escape_string($connect, $_POST["tno"]);
		$query = "SELECT * FROM thirukkural WHERE tno='".$username."'";
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