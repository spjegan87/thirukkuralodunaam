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
	<div class="container contact-us-page">
		<h2 class='text-center header-text'>
			தொடர்பில் இருங்கள்<br />
			<span>&nbsp;</span>
		</h2>
		<div class="row">
			<div class="col-sm-7">
				<h3><span class="">இணையதள வாசகர்களின் பதிவுகள் வரவேற்கப்படுகின்றன கீழே உள்ள விண்ணப்பத்தை பூர்த்தி செய்து அனுப்பவும்.</span>
				</h3>
				<form class="form-validate contact-form" action='admin/sql_query/mailer.php' method="post" autocomplete="off">
					<div class="form-group">
						<input type="text" class="form-control" id="ename" name="ename" placeholder="உங்களின் பெயரை பதிவு செய்ய">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="உங்களின் மின்னஞ்சலை பதிவு செய்ய">
					</div>
					<div class="form-group">
						<input type="text" class="form-control number" id="mobileno" name="mobileno" placeholder="தொலைபேசி எண்" maxlength="15">
					</div>
					<div class="form-group">
						<textarea class="form-control" id="message"  name="message" placeholder="உங்கள் செய்திகளை பதிவு செய்யவும் "></textarea>
					</div>
					<p class="text-center"><button type="submit" class="btn btn-default custom-btn">Submit</button></p>
				</form> 
			</div>
			<div class="col-sm-5">
				<div class="contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31090.894898559618!2d80.24003132161874!3d13.076237760376394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52660f0377b00f%3A0x658d531aaca11d57!2sCommissioner+of+Police!5e0!3m2!1sen!2sin!4v1550477762115" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- Aboutus Container Start -->
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<!-- Footer included -->