<?php 
	include('../../config/config.php');
?>
<div class='dashboard-container'>
	<!-- Members Details Start -->
	<h4 class="header-title">New Members Registration <a href="index.php?page=userdetails.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp;</i>Back</a></h4>
	<form action="../sql_query/admin_register.php" method="post" enctype="multipart/form-data" class="form" role="form">
		<div class='panel-type-bg'>
			<!-- Personal Info -->
			<h4 class="inner-title">Personal Information</h4>
			<div class='row'>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="fname" class='mandatory'>First name</label>
						<input type="text" class="form-control" id="fname" name='fname' placeholder='Enter first name'>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="lname">Last name</label>
						<input type="text" class="form-control" id="lname" name='lname' placeholder='Enter last name'>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="date" class='mandatory'>Date Of Birth</label>
						<label class='calendar'><input type="text" class="form-control number"  name="date" id='date' placeholder="Select date of birtd" required /></label>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<label class='disp-block mandatory'>Gender</label>
						<label class="radio-btn mar-top-10">
							<input type="radio" class="valign2" id='male' name='gender' value='male' checked><i class="wc-icon_2_roundcircledot wc-icon_1_roundcircle">&nbsp;</i>Male
						</label>
						<label class="radio-btn mar-top-10">
							<input type="radio" class="valign2" id='female' name='gender' value='female'><i class="wc-icon_1_roundcircle"  >&nbsp;</i>Female
						</label>
					</div>
				</div>
				<div class='clearfix'></div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="bg" class='mandatory'>Blood Group</label>
						<select id="bg" class="form-control" name="bg" required>
							<option value="" selected="">Please choose blood group</option>
							<option value="A1-">A1-</option>
							<option value="A1+">A1+</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="A1B-">A1B-</option>
							<option value="A1B+">A1B+</option>
							<option value="A2-">A2-</option>
							<option value="A2+">A2+</option>
							<option value="A2B-">A2B-</option>
							<option value="A2B+">A2B+</option>
							<option value="B-">B-</option>
							<option value="B+">B+</option>
							<option value="B1+">B1+</option>
							<option value="O-">O-</option>
							<option value="O+">O+</option>
						</select>
					</div>
				</div>
				<div class='clearfix'></div>
			</div><br />
			<!-- Account Info -->
			<h4 class="inner-title">Account Information</h4>
			<div class='row'>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="email" class='mandatory'>Email ID</label>
						<input type="text" class="form-control" id="email" placeholder='Enter first name' name='email'>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="username" class='mandatory'>User Name</label>
						<input type="text" class="form-control" id="username" placeholder='Enter last name' name='username'>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="password" class='mandatory'>Password</label>
						<input type="password" class="form-control" id="password" placeholder='Enter last name' name='password'>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group" class='mandatory'>
						<label for="cpassword">Confirm Password</label>
						<input type="password" class="form-control" id="cpassword" placeholder='Enter last name' name='cpassword'>
					</div>
				</div>
				<div class='col-sm-6'>
					<div class="form-group">
						<label for="securityquest" class='mandatory'>Security Question</label>
						 <select id="securityquest" class="form-control w-34-2" name="securityquest" required>
							<option value="" selected="selected">--- Select your question ----</option>
							<option value="What is your first mobile number?">What is your first mobile number?</option>
							<option value="What is your blood group?">What is your blood group?</option>
							<option value="What is your favourite food?">What is your favourite food?</option>
							<option value="What is your favourite sports?">What is your favourite sports?</option>
							<option value="Who is your best friend?">Who is your best friend?</option>
							<option value="What is your favourite movie?">What is your favourite movie?</option>
						</select>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="answer" class='mandatory'>Security Question Answer</label>
						<input type="text" class="form-control" id="answer" placeholder="Enter your answer" name="seqanswer" required>
					</div>
				</div>
				<div class='clearfix'></div>
			</div><br />
			<!-- Account Info -->
			<h4 class="inner-title">Contact Information</h4>
			<div class='row'>
				<div class='col-sm-6'>
					<div class="form-group">
						<label for="addr" class='mandatory'>Address</label>
						<textarea id="permanentaddr" name="addr" rows="4" cols="" class="form-control"placeholder="Enter your address"></textarea>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="phoneno" class='mandatory'>Contact Number</label>
						<input type="text" name='phoneno' class="form-control number" id="phoneno" placeholder='Enter last name' maxlength='10' required>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="emphoneno" class='mandatory'>Emergency Contact Number</label>
						<input type="text" class="form-control number" id="emphoneno" placeholder='Enter last name' name='emerphoneno' maxlength='10' required>
					</div>
				</div>
				<div class='col-sm-6'>
					<div class="form-group">
						<input type="text" id ="cusBrowse" autocomplete="off" value="" class="form-control cus-browse" readonly / >
						<input type="button" value="Browse..." class="browse btn">
						<input type="file" style="display:none;" id='photo' name='photo' multiple class='filechange upload-photo'>
						<p class="file-validate"></p>
					</div>	
				</div>
				<div class='clearfix'></div>
			</div><br />
			<!-- Group Info -->
			<h4 class="inner-title">Group Information</h4>
			<div class='row'>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="dateofjoin" class='mandatory'>Date Of Joining</label>
						<label class='calendar'><input type="text" class="form-control number" name="dateofjoin" id="date1" placeholder="Select date of joining" required /></label>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="activeplace" class='mandatory'>Active Place</label>
						<input type="text" class="form-control" id="activeplace" name="activeplace" placeholder="Enter person active place" required />
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="bg" class='mandatory'>User Status</label>
						<select id="status" class="form-control" name="status">
							<option value="Active" selected>Active</option>
							<option value="Inactive">Inactive</option>
						</select>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="usertype" class='mandatory'>User Type</label>
						<select id="usertype" class="form-control" name="usertype">
							<option value="normal" selected>Normal User</option>
							<option value="admin">Admin User</option>
						</select>
					</div>
				</div>
				<div class='col-sm-6'>
					<div class="form-group">
						<label for="reason" class='mandatory'>Joining Reason</label>
						<textarea id="reason" name="reason" rows="4" cols="" class="form-control"placeholder="Write your joining reason"></textarea>
					</div>
				</div>
				<div class='clearfix'></div><br />
				<div class='text-center'>
					<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2">Submit</button>
				</div><br />
			</div>
		</div>
	</form>
	<!-- Members Details End -->
</div>