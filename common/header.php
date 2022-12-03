<!-- Included common files -->
<?php
	ini_set('display_errors', 0);
	$localpath = "http://".$_SERVER['HTTP_HOST']."/thirukkuralodunaam";
	//echo $localpath;
	include($localpath.'/config/config.php');

	$ksql = "select * from keywords_register where status='Active'" ;
	$kquery = mysql_query($ksql);
	$krows = mysql_fetch_array($kquery);
	//print_r($krows);
?>
<!-- Included common files -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="kewwords" content="<?php echo $krows['wkeywords'] ?>">
<meta name="description" content="<?php echo  $krows['wdescription'] ?>"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta content="charset=utf-8" />
<meta name="author" content="">
<meta name="theme-color" content="#c2784f"/>
<link rel="icon" href="<?php echo $localpath ?>/images/favicon.ico">
<title>:: <?php echo $krows['wtitle']; ?> ::</title>
<link href="<?php echo $localpath ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $localpath ?>/css/custom-style.css" rel="stylesheet">
<link href="<?php echo $localpath ?>/css/admin-style.css" rel="stylesheet">
<link href="<?php echo $localpath ?>/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo $localpath ?>/css/datepicker.css" rel="stylesheet">
<link href="<?php echo $localpath ?>/css/icon.css" rel="stylesheet">
<link href="<?php echo $localpath ?>/css/slider/slider.css" rel="stylesheet">
<link href="<?php echo $localpath ?>/css/device.css" rel="stylesheet">
<link href="<?php echo $localpath ?>/css/admin-panel-device.css" rel="stylesheet">
<link rel="manifest" href="<?php echo $localpath ?>/manifest.json">
</head>
<body><!-- Google Tag Manager (noscript) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CYKWQWQ387"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CYKWQWQ387');
</script>
<!-- End Google Tag Manager (noscript) -->
<div class="container-fluid">