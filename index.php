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

<!-- Notification banner Start-->
<div class="notify-container <?php echo $nrows['status'] ?>">
	<div class="notify-center">
		<span class="nclose">x</span>
		<h1><?php echo $nrows['ntitle'] ?></h1>
		<p><?php echo $nrows['ncontent'] ?><br /><br />
		<span class="pull-left">நாள்: <?php echo $nrows['date'] ?> </span> <span class="pull-right">நேரம்: <?php echo $nrows['ntime'] ?></span><br />
		<span class="pull-left">இடம்: <?php echo $nrows['nplace'] ?>. </span>
		</p>
	</div>
</div>
<!-- Notification banner End -->
<!-- Include header part end -->
	<!-- Header Container Start -->
		<?php include("common/menu.php") ?>
	<!-- Header Container End -->
	<!-- Banner Container Start -->
	<div class="row">
		<div class="col-sm-12">
			<div  class="banner-container view">
				<h1><?php echo $hrows['btitle'] ?> </h1>
				<p><?php echo $hrows['bcontent'] ?></p>
				<div>
					<a href="javascript:;">அறத்துப்பால்</a>
				</div>
				<div>
					<a href="javascript:;">பொருட்பால் </a>
				</div>
				<div>
					<a href="javascript:;">காமத்துப்பால்</a>
				</div>
				<p class="btn-c">
					<a href="thirukkural.php?msg=1" class="btn custom-btn btn-anim">மேலும் அறிய</a>
				</p>
			</div>
		</div>
	</div>
	<!-- Banner Container Start -->
	<!-- About thiruvalluvar start -->
	<div class="about-container">
		<div class="row">
			<div class="col-sm-12">
				<div class="about-valluvar">
					<h2 class='text-center header-text'>
						திருவள்ளுவர் பற்றி<br />
						<span>&nbsp;</span>
					</h2>
					<img src="images/about-us.png" border="0" alt="" />
					<p><?php echo $hrows['atcontent'] ?></p>
					<a href="thiruvalluvar.php" class="btn custom-btn btn-anim">மேலும் அறிய</a>
				</div>
			</div>
		</div>
		<div class="row shadow-bg">
			<div class="col-sm-3 homecocontent">
				<h3 class='text-center'>
					03
					<br />
					<span>&nbsp;</span>
				</h3>
				அதிகாரம்
			</div>
			<div class="col-sm-3 homecocontent">
				<h3 class='text-center'>
					<?php echo $videocount ?>
					<br />
					<span>&nbsp;</span>
				</h3>
				திருக்குறள் காணொளிகள்
			</div>
			<div class="col-sm-3 homecocontent">
				<h3 class='text-center'>
					02
					<br />
					<span>&nbsp;</span>
				</h3>
				புத்தகங்கள் வெளியீடு
			</div>
			<div class="col-sm-3 homecocontent">
				<h3 class='text-center'>
					<?php echo $newscount ?>
					<br />
					<span>&nbsp;</span>
				</h3>
				நாளிதழ்கள் செய்திகள்
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- About thiruvalluvar end -->
	<div class="row">
		<div class="col-sm-12">
			<div class="d-advice">
				<h2 class='text-center header-text'>
					பயனுள்ள வார்த்தைகள்<br />
					<span>&nbsp;</span>
				</h2>
			</div>
			<!-- Carousel start -->
			<div id="myCarousel" class="carousel slide custom-carousel" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<?php 
						while($rowsdb = mysql_fetch_array($duwords))
						{
					?>
					<div class="item">
						<?php echo $rowsdb['uwords'] ?>
					</div>
					<?php
						}
					?>
				</div>
				<!-- Left and right controls -->
				<a class="left carousel-control bx-prev" href="#myCarousel" data-slide="prev">
				</a>
				<a class="right carousel-control bx-next" href="#myCarousel" data-slide="next">
				</a>
			</div>
			<!-- Carousel end -->
		</div>
	</div>
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<!-- Footer included -->