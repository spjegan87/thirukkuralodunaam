<form action="../sql_query/ytvideo_register.php" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Youtube Video Page  <a href="index.php?page=allytvideo.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp;</i>View All Youtube Videos</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-4'>
					<div class="form-group">
						<label for="ytname" class="mandatory">Youtube Video Name</label>
						<input type="text" class="form-control" id='ytname' name="ytname" placeholder="Enter News Paper Name" required />
					</div>
				</div>
				<div class='col-sm-8'>
					<div class="form-group">
						<label for="yturl" class="mandatory">Youtube Url</label>
						<input type="text" class="form-control" id='yturl' name="yturl" placeholder="Enter Title Of News" required />
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