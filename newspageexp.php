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
					நாளிதழ் செய்திகள்<br />
					<span>&nbsp;</span>
				</h2>
			</div>
		</div>
		<div class="service-container news-exp">
			<div class="row">
				<!--  -->
				<div class="col-md-12">
					<img src="admin/newsreport/<?php echo $newsrows['photo'] ?>" width="350" height="300" border="0" alt="" align="left" />
					<p class=""><strong><?php echo $newsrows['newstitle'] ?></strong> <br /><?php echo $newsrows['newspapername'] ?> <br /><span><?php echo $newsrows['date'] ?></span></p>
					<?php echo $newsrows['newscontent'] ?>
				</div>
				<!--  -->
			</div>
		</div>
	</div>
	<!-- Video Container End -->
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<!-- Footer included -->