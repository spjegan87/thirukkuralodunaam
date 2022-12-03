<form action="../sql_query/service_register.php" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Social Service Updates  <a href="index.php?page=allservices.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp;</i>View All Social Services</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-9'>
					<div class="form-group">
						<label for="servicename" class="mandatory">Service Name</label>
						<input type="text" class="form-control" id='servicename' name="servicename" placeholder="Enter Service Name" required />
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="servicedate" class="mandatory">Service date</label>
						<label class='calendar'><input type="text" class="form-control number"  name="servicedate" id='date' placeholder="Select Service Date" required /></label>
					</div>
				</div>
				<div class='col-sm-6'>
					<div class="form-group">
						<label for="photo" class="mandatory">Service Images</label><br />
						<input type="text" id ="cusBrowse" autocomplete="off" value="" class="form-control cus-browse" readonly / >
						<input type="button" value="Browse..." class="browse btn">
						<input type="file" style="display:none;" id='photo' name='photo' multiple class='filechange upload-photo'>
						<p class="file-validate"></p>
					</div>	
				</div>
				<div class='col-sm-12'>
					<div class="form-group">
						<label for="servicecomments" class="mandatory">Service Comments</label><br />
						<textarea id="servicecomments" name="servicecomments" rows="6" cols="" class="form-control"placeholder="Enter your comments"></textarea>
					</div>
				</div>
				<div class='col-sm-12'style='display:none;'>
					<div class="form-group">
						<input type="text" value="Y" name='status'>
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