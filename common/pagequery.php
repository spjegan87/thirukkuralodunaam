<?php
	include('../config/config.php');

	// Website Keywords and Description queries //
	/*$ksql = "select * from keywords_register where status='Active'" ;
	$kquery = mysql_query($ksql);
	$krows = mysql_fetch_array($kquery);*/

	// Home page content queries //
	$hsql = "select * from homepage where id='1'" ;
	$hquery = mysql_query($hsql);
	$hrows = mysql_fetch_array($hquery);

	/* User Detail Page  type */
	$username = $_SESSION['username'];
	$getuserquery = mysql_query("select * from admin_register where username='".$username."'");
	$getuserrow = mysql_fetch_array($getuserquery);

	// Home page content queries //
	$asql = "select * from aboutpage where id='1'" ;
	$aquery = mysql_query($asql);
	$arows = mysql_fetch_array($aquery);

	// Daily Useful Words
	$duwordssql = "select * from duwords where status='Active' ORDER BY 1 DESC limit 5;";
	$duwords = mysql_query($duwordssql);

	// Thirukkural Videos
	$kuralsql = "select * from kuralvideo where status='Active' ORDER BY 1 DESC;";
	$kuralvideo = mysql_query($kuralsql);
	$videocount = mysql_num_rows($kuralvideo);

	// Service Page Details 
	$id = $_GET['id'];
	
	$indexsql = "select * from service_register where id='$id'" ;
	$indexquery = mysql_query($indexsql);
	$indexrows = mysql_fetch_array($indexquery);

	// Newspaper Details 
	$newssql = "select * from newspaper_register where id='$id'" ;
	$newsquery = mysql_query($newssql);
	$newsrows = mysql_fetch_array($newsquery);
	//New paper count
	$newscontsql = mysql_query("select * from newspaper_register where status='Active'");
	$newscount = mysql_num_rows($newscontsql);

	// Gallery Page Content Queries 
	$gallerysql = "select * from gallery_register where status='Y' ORDER BY 1 DESC";
	$galleryquery = mysql_query($gallerysql);
	$gallerycount = mysql_num_rows($galleryquery);
		//Footer display
	$id = $_GET['id']; 
	$disquery = mysql_query("select * from gallery_register where id='".$id."'"); 
	$dotcounting = mysql_query("select * from gallery_register where id='".$id."'");
	$result = mysql_fetch_array($disquery);	
	// Comment Page Content Queries 
	$fsql = "select * from footer_comment where status='Active' ORDER BY 1 DESC";
	$fquery = mysql_query($fsql);

	//Comment page Expansion
	$fcomment = "select * from footer_comment where id='".$id."'" ;
	$fcquery = mysql_query($fcomment);
	$fresult = mysql_fetch_array($fcquery);

	//Book details	
	$id = $_GET['id'];
	
	$bql = "select * from book_register where id='$id'" ;
	$bquery = mysql_query($bql);
	$brows = mysql_fetch_array($bquery);
	
	//Page Notification details		
	$nql = "select * from notification_register" ;
	$nquery = mysql_query($nql);
	$nrows = mysql_fetch_array($nquery);

	//Youtube video details
	$ytql = "select * from ytvideo_register where status='Active' ORDER BY 1 DESC;";
	$ytquery = mysql_query($ytql);

 ?>