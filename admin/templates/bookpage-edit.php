<?php 
	include('../../config/config.php');
	$id= $_GET['id'];
	$sql = "select * from book_register where id='$id'";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<form action="../sql_query/book_edit.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Book Pages  <a href="index.php?page=allbooks.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp;</i>Back to see all books</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="bookname">Book Name</label>
						<input type="text" class="form-control" id='bookname' name="bookname" placeholder="Enter Subject Name" value="<?php echo $rows['bookname'] ?>"/>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="date">Book Release Date</label>
						<label class='calendar'><input type="text" class="form-control number"  name="date" id='date' placeholder="Select date of birtd" required value="<?php echo $rows['date'] ?>"/></label>
					</div>
				</div>
				<div class='col-sm-6'>
					<div class="form-group">
						<label for="photo">Book Front Image</label><br />
						<input type="text" id ="cusBrowse" autocomplete="off" class="form-control cus-browse photo-activity" name='photo' value='<?php echo $rows['photo'] ?>' readonly required/ >
						<input type="button" value="Browse..." class="browse btn">
						<input type="file" style="display:none;" id='photo' name='photo' multiple class='filechange upload-photo' value='<?php echo $rows['photo'] ?>' accept="image/x-png,image/gif,image/jpeg">
						<p class="file-validate"></p>
					</div>	
				</div>
				<div class='col-sm-6'>
					<div class="form-group">
						<label for="bformat">Book Download Format</label><br />
						<input type="text" id ="bformat" autocomplete="off" class="form-control cus-browse photo-activity" name='bformat' value='<?php echo $rows['bformat'] ?>' readonly required/ >
						<input type="button" value="Browse..." class="browse btn">
						<input type="file" style="display:none;" id='bformat' name='bformat' multiple class='filechange videoupload-photo' value='<?php echo $rows['bformat'] ?>' accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf">
						<p class="file-validate"></p>
					</div>	
				</div>
				<div class='col-sm-12'>
					<div class="form-group">
						<textarea id="bookcontent" name="bookcontent" rows="4" cols="" class="form-control"placeholder="Enter your book words"><?php echo $rows['bookcontent'] ?></textarea>
					</div>
				</div>
				<div class='col-sm-12'style='display:none;'>
					<div class="form-group">
						<input type="text" value="<?php echo $rows['status'] ?>" name='status'>
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