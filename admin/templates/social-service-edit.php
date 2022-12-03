<?php 
	include('../../config/config.php');
	$id= $_GET['id'];
	$sql = "select * from service_register where id='$id'";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<form action="../sql_query/service_updates_edit.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Social Media Updates  <a href="index.php?page=allservices.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp;</i>Back to see all posters</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="servicename">Service Name</label>
						<input type="text" class="form-control" id='servicename' name="servicename" placeholder="Enter Subject Name" value="<?php echo $rows['servicename'] ?>"/>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="servicedate">Service Date</label>
						<label class='calendar'><input type="text" class="form-control number"  name="servicedate" id='date' placeholder="Select date of birtd" required value="<?php echo $rows['servicedate'] ?>"/></label>
					</div>
				</div>
				<div class='col-sm-6'>
					<div class="form-group">
						<label for="photo">Service Image</label><br />
						<input type="text" id ="cusBrowse" autocomplete="off" class="form-control cus-browse photo-activity" name='photo' value='<?php echo $rows['photo'] ?>' readonly required/ >
						<input type="button" value="Browse..." class="browse btn">
						<input type="file" style="display:none;" id='photo' name='photo' multiple class='filechange upload-photo' value='<?php echo $rows['photo'] ?>' accept="image/x-png,image/gif,image/jpeg">
						<p class="file-validate"></p>
					</div>	
				</div>
				<div class='col-sm-12'>
					<div class="form-group">
						<textarea id="postercomments" name="servicecomments" rows="4" cols="" class="form-control"placeholder="Enter your comments"><?php echo $rows['servicecomments'] ?></textarea>
					</div>
				</div>
				<div class='col-sm-12'style='display:none;'>
					<div class="form-group">
						<input type="text" value="<?php echo $rows['status'] ?>" name='status'>
					</div>
				</div>
				<div class='clearfix'></div>
			</div><br />
			<!-- Recent Activities Info -->
			<div class='text-center'>
				<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2">Submit</button>
			</div><br />
		</div>
		<!-- Members Details End -->
	</div>
</form>