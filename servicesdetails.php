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
		<div class="service-container details">
			<div class="row">
				<!-- Service Page Start -->
				<div class="col-md-12">
					<img src="admin/servicephotos/<?php echo $indexrows['photo'] ?>" width="350" height="250" border="0" alt="" align="left"/>
					<h2 class='header-text'>
						<?php echo $indexrows['servicename'] ?><br />
						<span><?php echo $indexrows['servicedate'] ?></span>
					</h2>
					<?php echo $indexrows['servicecomments'] ?>
				</h2>
				</div>
				<!-- Service Page End -->
			</div>
		</div>
	</div>
	<!-- Video Container End -->

<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<!-- Footer included -->