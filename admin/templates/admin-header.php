<?php
	include('../../common/pagequery.php');
	$userphoto = $_SESSION['username'];
	$sqlfetch = "select * from admin_register where username='".$userphoto."'";
	$querydb = mysql_query($sqlfetch);
	$rowsdb = mysql_fetch_array($querydb)
?>
<div class="panel-hdr navbar-fixed-top">
	<div class="col-sm-2 col-xs-3 panel-hdr-lft">
		<p class='hidden-xs'>
			<i class="fa fa-database">&nbsp;</i>
			Admin Panel
			<a href="javascript:;" class="anim-in"><i class="fa fa-hand-o-right">&nbsp;</i><i class="fa fa-hand-o-left" style="display:none">&nbsp;</i></a>
		</p>
		<p class='mobile-logo hidden-sm hidden-md hidden-lg'><a href="index.php?page=dashboard.php"><img src="<?php echo $localpath ?>/images/weblogo.png" alt="" /></a></p>
	</div>
	<div class="col-sm-10 col-xs-9 panel-hdr-rgt">
		<div class="theme-setting">
			<h4>Select your own theme color</h4>
			<a href="javascript:;" class="theme-1 active">&nbsp;</a>
			<a href="javascript:;" class="theme-2">&nbsp;</a>
			<a href="javascript:;" class="theme-3">&nbsp;</a>
			<a href="javascript:;" class="theme-4">&nbsp;</a>
			<a href="javascript:;" class="theme-5">&nbsp;</a>
			<a href="javascript:;" class="theme-6">&nbsp;</a>
			<a href="javascript:;" class="theme-7">&nbsp;</a>
			<a href="javascript:;" class="theme-8">&nbsp;</a>
		</div>
		<div class="search-panel">
			<span>
			<i class="fa fa-search">&nbsp;</i><input type="text" name="" value="" placeholder="Enter user name and search" autocomplete="off" class="anim-search" /></span>
		</div>
		<div class="login-panel">
			<a href="javascript:;" class='user-name'><span><img src="<?php echo $localpath ?>/admin/userphotos/<?php echo $rowsdb['photos'] ?>" alt="" class='img-responsive' /></span>Mr. <?php echo $rowsdb['fname'] ?></a>
			<a href="javascript:;" class="user-menu"><i class="fa fa-bars">&nbsp;</i><i class="fa fa-times" style="display:none">&nbsp;</i></a>
			<span class="hidden-sm hidden-md hidden-lg time" id="time"></span>
			<div class="login-panel-show disp-none hidden-xs">
				<a href="index.php?page=memberupdate.php&id=<?php echo $getuserrow['id'] ?>"><i class="fa fa-suitcase">&nbsp;</i> Profile</a>
				<!-- <a href="javascript:;"><i class="fa fa-cog">&nbsp;</i> Setting</a> -->
				<a href="<?php echo $localpath ?>/config/logout.php"><i class="fa fa-key">&nbsp;</i> Logout</a>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>