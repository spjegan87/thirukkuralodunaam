<form action="../sql_query/gallery_add.php" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Gallery Updates  <a href="index.php?page=allgallery.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp;</i>View All Posters</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-5'>
					<div class="form-group">
						<label for="gallerytitle" class='textindex'>Gallery Title</label><br />
						<input type="text" name='gallerytitle' autocomplete="off" value="" class="form-control" />
					</div>
				</div>
				<div class='col-sm-5'>
					<div class="form-group">
						<label for="gallerytext" class='textindex'>Gallery Text</label><br />
						<textarea class="form-control" id="gallerytext" name="gallerytext"></textarea>
					</div>
				</div>
				<div class='clearfix'></div>
				<div class='clone'>
					<div class='col-sm-6 col-xs-9'>
						<div class="form-group gallery">
							<label for="photo" class='textindex galleryimg'><h5></h5></label><br />
							<input type="text" name='photo' autocomplete="off" value="" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse" class="browse btn">
							<input type="file" style="display:none;" name='photo' multiple class='filechange upload-photo'>
							<p class="file-validate"></p>
						</div>
					</div>
					<div class="col-sm-5 padd-none col-xs-3">
						<label for="photo">&nbsp;</label><br /><br />
						<a href="javascript:;" class="clone-add"><i class="fa fa-plus-circle fa-2x " aria-hidden="true">&nbsp;</i> <span class="hidden-xs">Add Photos</span></a>
						<a href="javascript:;" class="clone-minus" style="display:none;"><i class="fa fa-minus-circle fa-2x " aria-hidden="true" >&nbsp;</i> <span class="hidden-xs">Remove Photos</span></a>
					</div>
					<div class='clearfix'></div>
				</div>
				<div class='clearfix'></div>
				<div class='col-sm-2' style='display:none'>
					<div class="form-group">
						<label for="gallerytitle" class='textindex'>Gallery Status</label><br />
						<input type="text" name='status' autocomplete="off" value="Y" class="form-control" />
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