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
	<!-- Inner page header container Start -->
	<div class="row">
		<div class="inner-brdr"></div>
	</div>
	<!-- Inner page header container End -->
	<!-- Video Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class='text-center header-text'>
					விரிவான  கருத்து பதிவுகள்<br />
					<span>&nbsp;</span>
				</h2>
				<h4><?php echo $fresult['fname'] ?></h4>
				<a href="mailto:<?php echo $fresult['fmailid'] ?>" class="small"><em><?php echo $fresult['fmailid'] ?></em></a><br /><br />
				<p><?php echo $fresult['fmessage'] ?></p><br />
			</div>
		</div>
	</div>
	<!-- Video Container End -->
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>

<!-- Footer included -->