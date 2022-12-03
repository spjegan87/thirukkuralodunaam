<form action="../sql_query/notification_register.php" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Paper News Updates  <a href="index.php?page=allnotification.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp;</i>View All Notification</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-4'>
					<div class="form-group">
						<label for="ntitle" class="mandatory">Notification Title</label>
						<input type="text" class="form-control" id='ntitle' name="ntitle" placeholder="Enter News Paper Name" required />
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="date" class="mandatory">Release date</label>
						<label class='calendar'><input type="text" class="form-control number"  name="date" id='date' placeholder="Select Service Date" required /></label>
					</div>
				</div>	
				<div class='col-sm-2'>
					<div class="form-group">
						<label for="ntime" class="mandatory">Release Time</label>
						<input type="text" class="form-control" id='ntime' name="ntime" placeholder="Enter Title Of News" required />
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="nplace" class="mandatory">Release Place</label>
						<input type="text" class="form-control" id='nplace' name="nplace" placeholder="Enter Title Of News" required />
					</div>
				</div>
				<div class='col-sm-12'>
					<div class="form-group">
						<label for="ncontent" class="mandatory">Notification Contents</label><br />
						<textarea id="ncontent" name="ncontent" rows="6" cols="" class="form-control"placeholder="Enter News Paper Content" required></textarea>
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