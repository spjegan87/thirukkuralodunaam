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
	<div  class="row">
		<div class="container-fluid gallery-page">
			<!-- Carousel Start -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item">
						<img src="admin/galleryphotos/<?php echo $result['photo'] ?>" alt="" class="img-responsive "/>
						<div class="carousel-caption">
							<h3><?php echo $result['gallerytitle'] ?></h3>
							<p><?php echo $result['gallerytext'] ?></p>
						</div>
					</div>
					<div class="item">
						<img src="admin/galleryphotos/<?php echo $result['photo1'] ?>" alt="" class="img-responsive "/>
						<div class="carousel-caption">
							<h3><?php echo $result['gallerytitle'] ?></h3>
							<p><?php echo $result['gallerytext'] ?></p>
						</div>
					</div>
					<div class="item">
						<img src="admin/galleryphotos/<?php echo $result['photo2'] ?>" alt="" class="img-responsive "/>
						<div class="carousel-caption">
							<h3><?php echo $result['gallerytitle'] ?></h3>
							<p><?php echo $result['gallerytext'] ?></p>
						</div>
					</div>
					<div class="item">
						<img src="admin/galleryphotos/<?php echo $result['photo3'] ?>" alt="" class="img-responsive "/>
						<div class="carousel-caption">
							<h3><?php echo $result['gallerytitle'] ?></h3>
							<p><?php echo $result['gallerytext'] ?></p>
						</div>
					</div>
					<div class="item">
						<img src="admin/galleryphotos/<?php echo $result['photo4'] ?>" alt="" class="img-responsive "/>
						<div class="carousel-caption">
							<h3><?php echo $result['gallerytitle'] ?></h3>
							<p><?php echo $result['gallerytext'] ?></p>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!-- Carousel End -->
		</div>
	</div>
	<!-- Aboutus Container Start -->
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<!-- Footer included -->