<?php 
	include('../../config/config.php');
	$id= $_GET['id'];
	$sql = "select * from kuralvideo where id='$id'";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<form action="../sql_query/kuralvideoedit.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Thirukkural Videos<a href="index.php?page=allvideos.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp;</i>View All Videos</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class="col-sm-8">
					<div class="row">
						<div class='col-sm-6'>
							<div class="form-group">
								<label for="kuralno" class='mandatory'>Thirukkural No</label>
								<input type="text" class="form-control number" id="kuralno" name='kuralno' placeholder='Enter the kural number' value="<?php echo $rows['kuralno'] ?>">
							</div>
						</div>
						<div class='col-sm-6'>
							<div class="form-group">
								<label for="kuralathikaram" class='mandatory'>Thirukkural Athikaaram</label>
								<input type="text" class="form-control" id="kuralathikaram" name='kuralathikaram' placeholder='Enter the name of athikaram' value="<?php echo $rows['kuralathikaram'] ?>">
							</div>
						</div>
						<div class='col-sm-10'>
							<div class="form-group">
								<label for="photo" class='mandatory'>Upload Thirukkural Video</label>
								<input type="text" name='photo' value='<?php echo $rows['kuralvideo']; ?>' id ="cusBrowse" autocomplete="off" class="form-control cus-browse" readonly / >
								<input type="button" value="Browse..." class="browse btn">
								<input type="file" style="display:none;" id='photo' name='photo' multiple class='filechange' value="<?php echo $rows['kuralvideo']; ?>">
								<p class="file-validate"></p>
							</div>	
						</div>
					</div>
				</div>
				<div class="col-sm-3 viewvideo">
					<div class="player">
						<video id="video" src="../videos/<?php echo $rows['kuralvideo'] ?>" controls="" ></video>
					</div>
				</div>
			</div><br />
			<!-- Recent Activities Info -->
			<div class='text-center'>
				<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2 fn-confirmation">Submit</button>
			</div><br />
		</div>
		<!-- Members Details End -->
	</div>
</form>