<!-- Header included -->
<?php 
	include('../../config/config.php');
	include('../../common/script.php');
	if(isset($_SESSION['username']))
	{
		header('location:'.$localpath.'/admin/templates/index.php');
	}
?>
<!-- Header included -->
<div class="row">
	<div class="col-sm-12">
		<div class="admin-thanks text-center">
			<br /><br /><img src="<?php echo $localpath ?>/images/success-tick.png" alt="" /><br /><br />
			<?php
				if($_GET['msg'] == 'updated'){
				echo "<h3>Profile Updated Successfully</h3><br>";
				echo "<script> abupdated();</script>"; }
				if($_GET['msg'] == 'hupdated'){
				echo "<h3>Profile Updated Successfully</h3><br>";
				echo "<script> hpupdated();</script>"; }
				if($_GET['msg'] == 'thanks'){
				echo "<h3>Registration Successfully</h3><br>";
				echo "<script> userdetailpage();</script>"; }
				//Daily content updates
				if($_GET['msg'] == 'updateuwords'){
				echo "<h3>Registration Successfully</h3><br>";
				echo "<script> updateuwordspage();</script>"; }
				//Video updates
				if($_GET['msg'] == 'vthanks'){
				echo "<h3>Video Updated Successfully</h3><br>";
				echo "<script> vupdated();</script>"; }
				// Service Page Registration
				if($_GET['msg'] == 'serviceupdate'){
				echo '<h3>Your Social Service Details Should Be Stored in <br /> Server Successfully."</h3><br>';
				echo "<script> serviceupdate();</script>"; }
				// Service Page Registration
				if($_GET['msg'] == 'newsupdate'){
				echo '<h3>Your News Paper Content Should Be Stored in <br /> Server Successfully."</h3><br>';
				echo "<script> newsupdate();</script>"; }
				// Book Page Registration
				if($_GET['msg'] == 'bookupdate'){
				echo '<h3>Your Book Page Content Should Be Stored in <br /> Server Successfully."</h3><br>';
				echo "<script> bookupdate();</script>"; }
				// Service Page Registration
				if($_GET['msg'] == 'kuralupdate'){
				echo '<h3>Your News Paper Content Should Be Stored in <br /> Server Successfully."</h3><br>';
				echo "<script> kuralupdate();</script>"; }
				// Service Page Registration
				if($_GET['msg'] == 'nupdate'){
				echo '<h3>Your Added Successfully."</h3><br>';
				echo "<script> nupdate();</script>"; }
				// Service Page Registration
				if($_GET['msg'] == 'kupdate'){
				echo '<h3>Your Keyword Updated Successfully."</h3><br>';
				echo "<script> kupdate();</script>"; }
				if($_GET['msg'] == 'ytvideoupdate'){
				echo '<h3>Your Youtube Video Updated Successfully."</h3><br>';
				echo "<script> ytvideoupdate();</script>"; }
			?>
			<p>Thank you for submitting your registration information.</p>
		</div>
	</div>
</div>
