<?php
	include('config.php');
	session_start();
	session_destroy();


	header('location:'.$localpath.'/index.php');
	/*$starttime = microtime();
	$startarray = explode(" ", $starttime);
	$starttime = $startarray[1] + $startarray[0];

	$totaltime = time() - $starttime;
	if ($totaltime > 1*60)
	{
		header('location:'.$localpath.'index.php');
	}*/
?>