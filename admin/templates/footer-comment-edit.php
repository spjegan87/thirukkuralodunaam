<?php 
	include('../../config/config.php');
	$id= $_GET['id'];
	$sql = "select * from footer_comment where id='$id'";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<form action="../sql_query/footer_comments_edit.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Social Media Updates  <a href="index.php?page=allcomments.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp;</i>Back to see all comments</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="fname">Commenter Name</label>
						<input type="text" class="form-control" id='fname' name="fname" placeholder="Enter Subject Name" value="<?php echo $rows['fname'] ?>"/>
					</div>
				</div>
				<div class='col-sm-12'>
					<div class="form-group">
						<label for="fmessage">Commenter Message</label>
						<textarea id="fmessage" name="fmessage" rows="4" cols="" class="form-control"placeholder="Enter your comments"><?php echo $rows['fmessage'] ?></textarea>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<label for="status" class='mandatory'>Footer Comment Status</label>
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