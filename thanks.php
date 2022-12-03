<!-- Header included -->
<?php 
	include('common/header.php');
	include('common/menu.php');
	include('config/config.php');
?>
<!-- Header included -->
<script type="text/javascript">
window.setTimeout(function()
{
	window.location.href = 'index.php';
}, 5000);
</script>
<body class='login-bg'>
<div class="login-anim">
	<p class="custom-main-footer">
	<div class="container custom-home-container">
		<div class="row">
			<div class="col-sm-12">
				<div class="thanks before-login">
					<img src="<?php echo $localpath ?>/images/success-tick.png" alt="" /><br />
					<h3>உங்களின் பதிவு உறுதி செய்யப்பட்டது.</h3><br />
					<p> பதிவு செய்தமைக்கு மிக்க நன்றி.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Header included -->
<?php 
	include('common/footer.php');
	include('common/script.php');
?>
<!-- Header included -->