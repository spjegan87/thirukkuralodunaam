<!-- Include header part -->
<?php 
	include('config/config.php');
	include('common/header.php');
	include('common/pagequery.php');
	if(isset($_SESSION['username']))
	{
		header('location:'.$localpath.'/admin/templates/index.php');
	}
	$GetMsg = $_GET['msg'];
	$kuralsql = "select * from thirukkural where kuralathikaram='".$GetMsg."'" ;
	$kuraluery = mysql_query($kuralsql);
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
					திருவள்ளுவர் வாழ்க்கை<br />
					<span>&nbsp;</span>
				</h2>
				<p class="text-center lhgt28">திருவள்ளுவரது இயற்பெயர், வாழ்ந்த இடம் உறுதியாகத் தெரியவில்லை எனினும் அவர் கி.மு. முதல் நூற்றாண்டில், தற்போதைய சென்னை நகருக்கருகில், மயிலாப்பூரில் வாழ்ந்து வந்தார் என்று தமிழக அரசு அறிவித்துள்ளது. காவிரிப்பக்கம் அருகில் வாழ்ந்து வந்த மார்கசெயன் என்பவர் அவரது கவித்திறன் கண்டு அவரது ஒரு புதல்வியான வாசுகியை வள்ளுவருக்கு மணம் முடித்ததாகவும் அறியப்படுகிறது [2]. மதுரை நகரில் வாழ்ந்ததாகவும் கருத்துண்டு. </p>
			</div>
		</div>
		<div class="video-container" id="top">
			<div class="row">
				<div class="col-sm-4">
					<h3>தலைப்புகள்</h3>
					<div class="video-wrapper filter-position">
						<div class="video-scrollbar filter-container">
							<h4>அறத்துப்பால்</h4>
							<ol class="title">
							<?php
							include('common/kural.php');
							foreach($arathupaal as $name)
							{
								echo "<li><a href='thirukkural.php?msg=".$name[0]."' onclick='scroll()'>" . $name[1] . "</a></li>";
							}
							?>
							</ol>
							<h4>பொருட்பால்</h4>
							<ol class="title"> 
							<?php
							include('common/kural.php');
							foreach($portupaal as $name)
							{
								echo "<li><a href='thirukkural.php?msg=".$name[0]."'>" . $name[1] . "</a></li>";
							}
							?>
							</ol>
							<h4>காமத்துப்பால்</h4>
							<ol class="title">
							<?php
								include('common/kural.php');
								foreach($kaamathupaal as $name)
								{
									echo "<li><a href='thirukkural.php?msg=".$name[0]."'>" . $name[1] . "</a></li>";
								}
							?>
							</ol>
						</div>
					</div>
				</div>
				<div class="col-sm-8">
					<h3>திருக்குறள் மற்றும் விளக்கங்கள்<input type="text" value="" placeholder="குறள் எண் வைத்து தேடவும்" class="hidden-xs"></h3>
					<div class="thirukkural-panel"> 
						<h4>அதிகாரம் : <strong><?php echo $kuralrows['kuralathikaram'] ?> </strong></h4>
							<ol class="thirukkural">
							<?php  
								while ($kuralrows = mysql_fetch_assoc($kuraluery))
								{
							?> 
							<li>
								<span class=""><?php echo $kuralrows['tno'] ?></span><?php echo $kuralrows['tkural'] ?> <a href="javascript:;">விளக்கம் </a>
								<div class="explanation">
									<strong>விளக்கம்:</strong><br />
									<?php echo $kuralrows['tmeaning'] ?>
								</div>
							</li>
							<?php
								};
							?>
						</ol>
						<span class="fclear">&nbsp;</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Video Container End -->
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>

<!-- Footer included -->