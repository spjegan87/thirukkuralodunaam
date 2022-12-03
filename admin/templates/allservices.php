<?php
	include('../../config/config.php');
	ini_set("display_errors",0);

	$sql = "select * from service_register where status='Y'";
	$dataShow = mysql_query("select * from service_register where status='Y' ORDER BY 1 DESC");
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
	$count = mysql_num_rows($query);
?>
<form action='../sql_query/services_updates_delete.php' method='post'>
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Social Service Project Details <a href="index.php?page=social-service.php" class='pull-right icons'><i class="fa fa-plus-square-o" aria-hidden="true">&nbsp;</i>Add New Service Posts</a></h4>
		<div class='row'>
			<div class='col-sm-12'>
				<div class='panel-type-bg'>
					<h4 class="inner-title">Latest added service posters <p class='pull-right search-field'><input type='text' name='' placeholder='Search Members' class='form-control searchbox'></p></h4>
					<?php if(isset($_GET['msg']) and $_GET['msg'] == 'servicedelete') echo "<p class='error-msg'>1 Record deleted successfully.</p>";?>
					<table class='table table-bordered admin-table'>
						<tr>
							<th>Poster Name</th>
							<th>Poster Comment</th>
							<th width='150' class='hidden-xs'>Poster Image</th>
							<th width='100' class='hidden-xs'>Action</th>
						</tr>
						<tbody class="myTable">
						<?php 
							while($rowsdb = mysql_fetch_array($dataShow))
							{
						?>
						<tr>
							<td><?php echo $rowsdb['servicename'] ?> <br /><span class='small'><?php echo $rowsdb['servicedate'] ?></span> <span class="hidden-sm hidden-md hidden-lg">
								<img src="<?php echo $localpath ?>/admin/servicephotos/<?php echo $rowsdb['photo'] ?>" width='80' height='6' class='img-responsive' /><br /><a href="index.php?page=web-social-service-edit.php&id=<?php echo $rowsdb['id'] ?>" class='icons' title='Edit Poster Details'><i class='fa fa-pencil'>&nbsp;</i></a><button type='submit' class='icons mar-rgtlft-20 brdr-none no-shadow <?php if($count == 0) echo "hide"; ?>' name='delete'value='<?php echo $rowsdb['id'] ?>' title='Delete Poster Details'onclick="return confirm('Are you sure want to delete this record?')"><i class='fa fa-trash'>&nbsp;</i></button>
							</span></td>
							<td><?php echo $rowsdb['servicecomments'] ?></td>
							<td class='hidden-xs'><img src="<?php echo $localpath ?>/admin/servicephotos/<?php echo $rowsdb['photo'] ?>" width='80' height='6' class='img-responsive' /></td>
							<td class='hidden-xs'><a href="index.php?page=social-service-edit.php&id=<?php echo $rowsdb['id'] ?>" class='icons' title='Edit Poster Details'><i class='fa fa-pencil'>&nbsp;</i></a><button type='submit' class='icons mar-rgtlft-20 brdr-none no-shadow <?php if($count == 0) echo "hide"; ?>' name='delete'value='<?php echo $rowsdb['id'] ?>' title='Delete Poster Details'onclick="return confirm('Are you sure want to delete this record?')"><i class='fa fa-trash'>&nbsp;</i></button></td>
						</tr>
						<?php
							}
							if($count == 0)
							{
						?>
								<tr><td class='text-center text-danger' colspan='4'>No record found</td></tr>
						<?php
							}
						?>
						<tr class="no-data">
							<td colspan="7" class="text-center">
								No record found.
							</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div><br /><br />
		<!-- Members Details End -->
	</div>
</form>