<?php 
	include('../../config/config.php');
	$id= $_GET['id'];
	$sql = "select * from gallery_register where id='$id'";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<form action="../sql_query/gallery_updates_edit.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Gallery Updates  <a href="index.php?page=allgallery.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp;</i>View All Posters</a></h4>
		<div class='panel-type-bg gallery-edit'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-5'>
					<div class="form-group">
						<label for="gallerytitle" class='textindex'>Gallery Title</label><br />
						<input type="text" name='gallerytitle' autocomplete="off" value="<?php echo $rows['gallerytitle'] ?>" class="form-control" />
					</div>
				</div>
				<div class='col-sm-5'>
					<div class="form-group">
						<label for="gallerytext" class='textindex'>Gallery Text</label><br />
						<textarea name='gallerytext' id="gallerytext" class="form-control"><?php echo $rows['gallerytext'] ?></textarea>
					</div>
				</div>
				<div class='clearfix'></div>
				<!-- 0 -->
				<div class='clone'>
					<div class='col-sm-6'>
						<div class="form-group gallery">
							<label for="photo" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo' autocomplete="off" value="<?php echo $rows['photo'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo' multiple class='filechange upload-photo' value='<?php echo $rows['photo'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
				</div>
				<!-- 1 -->
				<div class='clone'>
					<div class='col-sm-6'>
						<div class="form-group gallery">
							<label for="photo1" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo1' autocomplete="off" value="<?php echo $rows['photo1'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo1' multiple class='filechange upload-photo' value='<?php echo $rows['photo1'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
				</div>
				<!-- 2 -->
				<div class='clone'>
					<div class='col-sm-6'>
						<div class="form-group gallery">
							<label for="photo2" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo2' autocomplete="off" value="<?php echo $rows['photo2'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo2' multiple class='filechange upload-photo' value='<?php echo $rows['photo2'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
				</div>
				<!-- 3 -->
				<div class='clone'>
					<div class='col-sm-6'>
						<div class="form-group gallery">
							<label for="photo3" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo3' autocomplete="off" value="<?php echo $rows['photo3'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo3' multiple class='filechange upload-photo' value='<?php echo $rows['photo3'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
				</div>
				<!-- 4 -->
				<div class='clone'>
					<div class='col-sm-6'>
						<div class="form-group gallery">
							<label for="photo4" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo4' autocomplete="off" value="<?php echo $rows['photo4'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo4' multiple class='filechange upload-photo' value='<?php echo $rows['photo4'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
				</div>
				<div class='clearfix'></div>
				<div class='col-sm-2'>
					<div class="form-group">
						<label for="gallerytitle" class='textindex'>Gallery Status</label><br />
						<select class="form-control" name="status">
							<option value="Y" <?php if($rows['status']=="Y"){ echo "selected";}?>>Active</option>
							<option value="N" <?php if($rows['status']=="N"){ echo "selected";}?>>Inactive</option>
						</select>
					</div>
				</div>
			</div><br />
			<!-- Recent Activities Info -->
			<div class='text-center'>
				<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2">Submit</button>
			</div><br />
		</div>
		<!-- Members Details End -->
	</div>
</form>