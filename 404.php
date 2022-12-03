<!-- Include header part -->
<?php 
	include('config/config.php');
	include('common/header.php');
	include('common/pagequery.php');
	if(isset($_SESSION['username']))
	{
		header('location:'.$localpath.'/admin/templates/index.php');
	}
?>
<!-- Include header part end -->
	<!-- Header Container Start -->
		<?php include("common/menu.php") ?>
	<!-- Header Container End --> 
	<div class="fof-container">
		<img src="images/fournotfour.png" border="0" alt="">
	</div>
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<!-- Footer included -->