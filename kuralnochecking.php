<?php
	ini_set('display_errors', '1');
	$connect = mysql_connect("localhost","root","","thirukkuralodunaam");
	if(isset($_POST["tno"]))
	{
		$username = mysql_real_escape_string($connect, $_POST["tno"]);
		$query = "SELECT * FROM thirukkural WHERE tno='".$username."'";
		$result  = mysql_query($connect,$query);
		echo mysql_num_rows($result);
	}
?>