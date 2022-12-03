<form action="../sql_query/newspaper_register.php" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Paper News Updates  <a href="index.php?page=allnews.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp;</i>View All Paper News</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-4'>
					<div class="form-group">
						<label for="newspapername" class="mandatory">News Paper Name</label>
						<input type="text" class="form-control" id='newspapername' name="newspapername" placeholder="Enter News Paper Name" required />
					</div>
				</div>
				<div class='col-sm-5'>
					<div class="form-group">
						<label for="newstitle" class="mandatory">Title of News</label>
						<input type="text" class="form-control" id='newstitle' name="newstitle" placeholder="Enter Title Of News" required />
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="date" class="mandatory">Release date</label>
						<label class='calendar'><input type="text" class="form-control number"  name="date" id='date' placeholder="Select Service Date" required /></label>
					</div>
				</div>
				<div class='col-sm-6'>
					<div class="form-group">
						<label for="photo" class="mandatory">News Paper Images</label><br />
						<input type="text" id ="cusBrowse" autocomplete="off" value="" class="form-control cus-browse" readonly / >
						<input type="button" value="Browse..." class="browse btn">
						<input type="file" style="display:none;" id='photo' name='photo' multiple class='filechange upload-photo'>
						<p class="file-validate"></p>
					</div>	
				</div>
				<div class='col-sm-12'>
					<div class="form-group">
						<label for="newscontent" class="mandatory">News Paper Contents</label><br />
						<textarea id="newscontent" name="newscontent" rows="6" cols="" class="form-control"placeholder="Enter News Paper Content" required></textarea>
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