<?php 
	include('../../config/config.php');
	$id= $_GET['id'];
	$sql = "select * from keywords_register";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<form action="../sql_query/keywords_edit.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Paper News Updates  <a href="index.php?page=allnotification.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp;</i>View All Notification</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-4'>
					<div class="form-group">
						<label for="wtitle" class="mandatory">Website Title</label>
						<input type="text" class="form-control" id='wtitle' name="wtitle" placeholder="Enter News Paper Name" required value="<?php echo $rows['wtitle'] ?>"/>
					</div>
				</div>
				<div class='col-sm-12'>
					<div class="form-group">
						<label for="wkeywords" class="mandatory">Website Keywords</label><br />
						<textarea id="wkeywords" name="wkeywords" rows="6" cols="" class="form-control"placeholder="Enter keywords" required><?php echo $rows['wkeywords'] ?></textarea>
					</div>
				</div>
				<div class='col-sm-12'>
					<div class="form-group">
						<label for="wdescription" class="mandatory">Website Description</label><br />
						<textarea id="wdescription" name="wdescription" rows="6" cols="" class="form-control"placeholder="Enter description" required><?php echo $rows['wdescription'] ?></textarea>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<label for="status" class='mandatory'>Notification Status</label>
						<select id="status" class="form-control" name="status">
							<option value="Active" <?php if($rows['status']=="Active"){ echo "selected";}?>>Active</option>
							<option value="Inactive" <?php if($rows['status']=="Inactive"){ echo "selected";}?>>Inactive</option>
						</select>
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