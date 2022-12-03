<?php
	include('../../config/config.php');
	ini_set("display_errors",0);

	$sql = "select * from kuralvideo where status='Active' ORDER BY kuralno ASC";
	$dataShow = mysql_query($sql);
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
	$count = mysql_num_rows($query);
?>
<form action='../sql_query/kuralvideodelete.php' method='post'>
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Thirukkural video Details <a href="index.php?page=kuralvideo.php" class='pull-right icons'><i class="fa fa-plus-square-o" aria-hidden="true">&nbsp;</i>Add New Videos</a></h4>
		<div class='row'>
			<div class='col-sm-12'>
				<div class='panel-type-bg kuralvideo'>
					<h4 class="inner-title">Latest added videos <p class='pull-right search-field'><input type='text' name='player' placeholder='Search Members' class='form-control searchbox'></p></h4>
					<?php if(isset($_GET['msg']) and $_GET['msg'] == 'videodelete') echo "<p class='error-msg'>1 Record deleted successfully.</p>"; ?>
						<?php 
							while($rowsdb = mysql_fetch_array($dataShow))
							{
						?>
						<div class="player">
							<video id="video" src="../videos/<?php echo $rowsdb['kuralvideo'] ?>" controls=""  ></video>
							<p><?php echo $rowsdb['kuralno'] ?> <?php echo $rowsdb['kuralathikaram'] ?> <a href="index.php?page=kuralvideoedit.php&id=<?php echo $rowsdb['id'] ?>" class='icons' title='Edit Poster Details'><i class='fa fa-pencil'>&nbsp;</i></a><button type='submit' class='icons mar-rgtlft-20 brdr-none no-shadow <?php if($count == 0) echo "hide"; ?>' title='Delete Poster Details' name='delete' value='<?php echo $rows['id'] ?>' onclick="return confirm('Are you sure want to delete this record?')"><i class='fa fa-trash'>&nbsp;</i></button></p>
						</div>
					<?php
						}
						if($count == 0)
						{
					?>
							<p class='text-center text-danger no-data'><img src="<?php echo $localpath ?>/images/no-data.svg" alt="" /><br />No records found</p>
					<?php
						}
					?>
					<div class="clearfix"></div>
					<p class="no-data">
						<img src="<?php echo $localpath ?>/images/no-data.svg" alt="" title="" /><br />No records found
					</p>
				</div>
			</div>
		</div><br /><br />
		<!-- Members Details End -->
	</div>
</form>