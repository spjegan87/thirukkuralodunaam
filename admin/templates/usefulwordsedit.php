<?php 
	include('../../config/config.php');
	$id= $_GET['id'];
	$sql = "select * from duwords where id='$id'";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<form action="../sql_query/duwordsupdate.php?id=<?php echo $rows['id'] ?>" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Home Page Useful Words Details <a href="index.php?page=allduwords.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp;</i>Back to see all words</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-8'>
					<div class="form-group">
						<label for="uwords" class='mandatory'>Home page useful content	</label>
						<textarea id="uwords" name="uwords" rows="4" cols="" class="form-control"placeholder="Enter useful content here" required><?php echo $rows['uwords'] ?></textarea>
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