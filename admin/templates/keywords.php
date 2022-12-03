<form action="../sql_query/keywords_register.php" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Website Keywords  <a href="index.php?page=allkeywords.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp;</i>View All Notification</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-4'>
					<div class="form-group">
						<label for="wtitle" class="mandatory">Website Title</label>
						<input type="text" class="form-control" id='wtitle' name="wtitle" placeholder="Enter website title" required />
					</div>
				</div>
				<div class='col-sm-12'>
					<div class="form-group">
						<label for="wkeywords" class="mandatory">Website Keywords</label><br />
						<textarea id="wkeywords" name="wkeywords" rows="6" cols="" class="form-control"placeholder="Enter keywords" required></textarea>
					</div>
				</div>
				<div class='col-sm-12'>
					<div class="form-group">
						<label for="wdescription" class="mandatory">Website Description</label><br />
						<textarea id="wdescription" name="wdescription" rows="6" cols="" class="form-control"placeholder="Enter description" required></textarea>
					</div>
				</div>
				<div class='col-sm-12'style='display:none;'>
					<div class="form-group">
						<input type="text" value="Active" name='status'>
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