<!-- Header included -->
<?php 
	include('../common/header.php');
	include('../config/config.php');
	if(isset($_SESSION['username']))
	{
		header('location:'.$localpath.'admin/templates/index.php');
	}
?>
<!-- Header included -->
<body class='login-bg'>

<div class="container-fluid">
	<div class="row">
		<div class="container">
			<div class="col-sm-12">
				<!-- <a class="navbar-brand" href="../index.php"><img src="<?php echo $localpath ?>/images/weblogo.png" width="100" height="90" border="0" alt="" /></a> -->
			</div>
		</div>
	</div>
	<div class="row">
			<div class="col-sm-6 hidden-xs">
				<div class="thiruvalluvar-statue">
					<img src="../images/thiruvalluvar.png" border="0" alt="" />
				</div>
			</div>
		<div class="col-sm-6">
			<div class="logincontainer">
				<div class="login-page-panel">
					<h2 class='shadow-1'>Welcome login panel</h2>
					<div class="login-form">
						<form role="form" method="post" action="sql_query/login_query.php">
							<p class="error-txt"><?php if(isset($_GET['msg']) and $_GET['msg'] == 'error') echo "Sorry username password wrong!"; ?></p>
							<div class="form-group">
								<input type="text" class="form-control" name="username" id="email" placeholder="Login Name" required>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" id="password" placeholder="Login Password" required>
							</div>
							<div class="form-group">
								<button type="submit" class="btn custom-btn hvr-float-shadow mar-rgt-5">Submit</button> <a href="javascript:;" class="forgot-pwd">Forgot Password </a>
							</div>
						</form>
						<form action="sql_query/pwdmailer.php" method="post" enctype="multipart/form-data" class="form" role="form" style="display:none">
							<div class="form-group overwrite">
								<label for="username" class="mandatory">Register Email</label>
								<input type="text" class="form-control" id="emailid" placeholder='Enter register email id' name='emailid' required >
							</div>
							<div class="form-group mar-none text-center">
								<button type="submit" class="btn custom-btn hvr-float-shadow ft-pwd  fn-confirmation">Submit</button> <a href="javascript:;" class="backto-sign">Back to login </a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Included Script -->
<?php 
	include('../common/script.php');
?>
<!-- Included Script -->
</body>
</html>