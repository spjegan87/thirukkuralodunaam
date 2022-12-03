<?php 
	include('../../config/config.php');
	ini_set("display_errors",0);

	$sql = "select * from ytvideo_register where status='Active'";
	$dataShow = mysql_query("select * from ytvideo_register where status='Active' ORDER BY 1 DESC");
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
	$count = mysql_num_rows($query);
?>
<form action='../sql_query/ytvideo_delete.php' method='post'>
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Youtube Video Details <a href="index.php?page=youtubevideo.php" class='pull-right icons'><i class="fa fa-plus-square-o" aria-hidden="true">&nbsp;</i>Add New Youtube Video</a></h4>
		<div class='row'>
			<div class='col-sm-12'>
				<div class='panel-type-bg'>
					<h4 class="inner-title">Latest added youtube videos <p class='pull-right search-field'><input type='text' name='' placeholder='Search Youtube Videos' class='form-control searchbox'></p></h4>
					<?php if(isset($_GET['msg']) and $_GET['msg'] == 'newsdelete') echo "<p class='error-msg'>1 Record deleted successfully.</p>";?>
						<?php 
							while($rowsdb = mysql_fetch_array($dataShow))
							{
						?>
						<div class="player ytvideo">
							<embed type="video/webm" src="<?php echo $rowsdb['yturl'] ?>" >
							<p><?php echo $rowsdb['ytname'] ?> <a href="index.php?page=youtubevideo-edit.php&id=<?php echo $rowsdb['id'] ?>" class='icons' title='Edit Poster Details'><i class='fa fa-pencil'>&nbsp;</i></a> <button type='submit' class='icons mar-rgtlft-20 brdr-none no-shadow <?php if($count == 0) echo "hide"; ?>' title='Delete Poster Details' name='delete' value='<?php echo $rows['id'] ?>' onclick="return confirm('Are you sure want to delete this record?')"><i class='fa fa-trash'>&nbsp;</i></button></p>
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