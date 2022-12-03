<?php 
	/* Local host */
	session_start();
	$host ="localhost";
	$username = "root";
	$pwd = "";
	#$username = "aptechrjpm";
	#$pwd = "jegan53426*";
	$database = 'thirukkuralodunaam';
	$connect = mysql_connect($host,$username,$pwd);
	$selectdb = mysql_select_db($database,$connect);
	//mysql_set_charset("utf8");

	/* Find the local path */
	$localpath = "http://".$_SERVER['HTTP_HOST']."/thirukkuralodunaam";
	/* Find the local path */
?>