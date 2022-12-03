<?php 
	include('../../config/config.php');
	$id= "1";
	$sql = "select * from aboutpage where id='$id'";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<form action="../sql_query/aboutpageupdate.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">About Us Page Content</h4>
		<div class='panel-type-bg'>
			<h4 class="inner-title">Page Information</h4>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-12'>
					<div class="form-group">
						<label for="aboutcontent" class='mandatory'>About us Content</label>
						<textarea id="aboutcontent" name="aboutcontent" rows="4" cols="" class="form-control"placeholder="Enter about us page content here" required><?php echo $rows['aboutcontent'] ?></textarea>
					</div>
				</div>
			</div><br />
			<h4 class="inner-title">Personal Information</h4>
			<div class="row">
				<div class='col-sm-4'>
					<div class="form-group">
						<label for="aname" class='mandatory'>Name</label>
						<input type="text" class="form-control" id="aname" name='aname' placeholder='Enter name' required value="<?php echo $rows['aname'] ?>">
					</div>
				</div>
				<div class='col-sm-4'>
					<div class="form-group">
						<label for="position" class='mandatory'>Position</label>
						<input type="text" class="form-control" id="position" name='position' placeholder='Enter name' required value="<?php echo $rows['position'] ?>">
					</div>
				</div>
				<div class='col-sm-4'>
					<div class="form-group">
						<label for="aemail" class='mandatory'>Email</label>
						<input type="email" class="form-control" id="aemail" name='aemail' placeholder='Enter about page email here' required value="<?php echo $rows['aemail'] ?>">
					</div>
				</div>
				<div class='col-sm-4'>
					<div class="form-group">
						<label for="date" class='mandatory'>Date Of Birth</label>
						<label class='calendar'><input type="text" class="form-control number"  name="date" id='date' placeholder="Select date of birtd" value="<?php echo $rows['date'] ?>" /></label>
					</div>
				</div>
				<div class='col-sm-4'>
					<div class="form-group">
						<label for="anumber" class='mandatory'>Contact Number</label>
						<input type="text" class="form-control number" id="anumber" name='anumber' placeholder='Enter contact number here' required maxlength="13" value="<?php echo $rows['anumber'] ?>">
					</div>
				</div>
				<div class='col-sm-4'>
					<div class="form-group">
						<label for="alnumber" class='mandatory'>Alternate Contact Number</label>
						<input type="text" class="form-control number" id="alnumber" name='alnumber' placeholder='Enter alternate number' required maxlength="13" value="<?php echo $rows['alnumber'] ?>">
					</div>
				</div>
				<div class='clearfix'></div>
			</div><br />
			<h4 class="inner-title">Photo Information</h4>
			<div class="row">
				<div class='col-sm-6'>
					<div class="form-group">
						<label for="photo" class='mandatory'>Upload Image</label><br />
						<input type="text" name='photo' value='<?php echo $rows['photo']; ?>' id ="cusBrowse" autocomplete="off" class="form-control cus-browse" readonly / >
						<input type="button" value="Browse..." class="browse btn">
						<input type="file" style="display:none;" id='photo' name='photo' multiple class='filechange upload-photo' value="<?php echo $rows['photo']; ?>">
						<p class="file-validate"></p>
					</div>	
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="imgtop" class='mandatory'>Image Position Top</label>
						<input type="number" class="form-control" id="imgtop" name='imgtop' placeholder='Move image to top position' required maxlength="3" value="<?php echo $rows['imgtop'] ?>">
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="imgleft" class='mandatory'>Image Position Left</label>
						<input type="number" class="form-control" id="imgleft" name='imgleft' placeholder='Move image to left position' required maxlength="3" value="<?php echo $rows['imgleft'] ?>">
					</div>
				</div>
				<div class='col-sm-12'>
					<div class="form-group">
						<label for="photocontent" class='mandatory'>Photo Content</label>
						<textarea id="photocontent" name="photocontent" rows="4" cols="" class="form-control"placeholder="Enter photo content" required><?php echo $rows['photocontent'] ?></textarea>
					</div>
				</div>
			</div>
			<!-- Recent Activities Info -->
			<div class='text-center'>
				<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2 fn-confirmation">Submit</button>
			</div><br />
		</div>
		<!-- Members Details End -->
	</div>
</form>