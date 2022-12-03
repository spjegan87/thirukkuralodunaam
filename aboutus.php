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
	<!-- Aboutus Container Start -->
	<div class="container">
		<div class="about-page">
			<div class="row">
				<div class="col-sm-5">
					<div class="about-page-img">
						<p><img src="admin/aboutuspagephotos/<?php echo $arows['photo'] ?>" height="" width="" border="0" style="left:<?php echo $arows['imgleft'] ?>px; top:<?php echo $arows['imgtop'] ?>px"/></p>
						<span><?php echo $arows['photocontent']?></span>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="about-page-content">
						<h1><?php echo $arows['aname']?> <br />
							<span><?php echo $arows['position']?> </span>
						</h1>
						<p>
							<span class="amail">
								<em class="fa fa-envelope-o"></em>
							</span>
							<a href="mailto:<?php echo $arows['aemail']?>"><?php echo $arows['aemail']?></a>
						</p>
						<p>
							<span class="aphone">
								<em class="fa fa-volume-control-phone"></em>
							</span>
							<?php echo $arows['anumber']?>, <?php echo $arows['alnumber']?>
						</p>
						<p>
							<span class="adob">
								<em class="fa fa-birthday-cake"></em>
							</span>
							<?php echo $arows['date']?>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<p class='acontent'><?php echo $arows['aboutcontent']?></p>
			</div>
		</div><br /><br />	
	</div>
	<!-- Aboutus Container Start -->
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<!-- Footer included -->