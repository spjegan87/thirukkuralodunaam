<?php 
	include('../../config/config.php');
	$id= $_GET['id'];
	$sql = "select * from ytvideo_register where id='$id'";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<form action="../sql_query/ytvideo_edit.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Youtube Video Updates  <a href="index.php?page=allytvideo.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp;</i>View All Paper News</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-4'>
					<div class="form-group">
						<label for="ytname" class="mandatory">Youtube Video Name</label>
						<input type="text" class="form-control" id='ytname' name="ytname" placeholder="Enter News Paper Name" required  value="<?php echo $rows['ytname'] ?>"/>
					</div>
				</div>
				<div class='col-sm-8'>
					<div class="form-group">
						<label for="yturl" class="mandatory">Youtube Url</label>
						<input type="text" class="form-control" id='yturl' name="yturl" placeholder="Enter Title Of News" required value="<?php echo $rows['yturl'] ?>"/>
					</div>
				</div>  
				<div class="col-sm-3">
					<div class="form-group">
						<label for="status" class='mandatory'>Youtube Status</label>
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