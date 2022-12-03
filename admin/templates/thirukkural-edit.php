<?php 
	include('../../config/config.php');
	$id= $_GET['id'];
	$sql = "select * from thirukkural where id='$id'";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<form action="../sql_query/kural_update.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Thirukkural Registration<a href="index.php?page=allkural.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp;</i>View All Thirukkural</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-4'>
					<div class="form-group">
						<label for="thirukkuralpirivu" class="mandatory">Thirukkural Part</label>
						<select class="form-control" name="thirukkuralpirivu" required  id="thirukkuralpirivu" onchange="countryChange(this);">
							<option value="<?php echo $rows['thirukkuralpirivu']; ?>"><?php echo $rows['thirukkuralpirivu']; ?></option>
							<option value="அறத்துப்பால்">அறத்துப்பால்</option>
							<option value="பொருட்பால்">பொருட்பால்</option>
							<option value="காமத்துப்பால்">காமத்துப்பால்</option>
						</select>
					</div>
				</div>
				<div class='col-sm-4'>
					<div class="form-group">
						<label for="kuralathikaram" class="mandatory">Thirukkural Athikaaram</label>
						<!-- <select id="kuralathikaram" class="form-control" name="kuralathikaram" required>
							<option value="<?php echo $rows['kuralathikaram']; ?>"><?php echo $rows['kuralathikaram']; ?></option>
						</select> -->
						<input type="text" id="kuralathikaram" value="<?php echo $rows['kuralathikaram']; ?>" name='kuralathikaram' class="form-control">
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="tno" class="mandatory">Thirukkural Number</label>
						<input type="text" class="form-control" id='tno' name="tno" placeholder="Enter Thirukkural Number" required  value="<?php echo $rows['tno'] ?>" />
					</div>
				</div>
				<div class='col-sm-10'>
					<div class="form-group">
						<label for="tkural" class="mandatory">Thirukkural</label><br />
						<textarea id="tkural" name="tkural" rows="2" cols="" class="form-control"placeholder="Enter Thirukkural"><?php echo $rows['tkural'] ?></textarea>
					</div>
				</div>
				<div class='col-sm-10'>
					<div class="form-group">
						<label for="tmeaning" class="mandatory">Thirukkural Meaning</label><br />
						<textarea id="tmeaning" name="tmeaning" rows="6" cols="" class="form-control"placeholder="Enter Thirukkural Meaning"><?php echo $rows['tmeaning'] ?></textarea>
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