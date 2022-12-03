<?php
	include('../../config/config.php');
	ini_set("display_errors",0);

	$sql = "select * from notification_register";
	$dataShow = mysql_query("select * from notification_register");
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
	$count = mysql_num_rows($query);
?>
<form action='../sql_query/notification_delete.php' method='post'>
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Social Service Project Details</h4>
		<div class='row'>
			<div class='col-sm-12'>
				<div class='panel-type-bg'>
					<h4 class="inner-title">Latest added service posters</h4>
					<?php if(isset($_GET['msg']) and $_GET['msg'] == 'notificationdelete') echo "<p class='error-msg'>1 Record deleted successfully.</p>";?>
					<table class='table table-bordered admin-table all-news'>
						<tr>
							<th width="300">Notification Name</th>
							<th>Notification Content</th>
							<th>Notification Status</th>
							<th width='100' class="hidden-xs">Action</th>
						</tr>
						<tbody class="myTable">
						<?php 
							while($rowsdb = mysql_fetch_array($dataShow))
							{
						?>
						<tr>
							<td><strong><?php echo $rowsdb['ntitle'] ?> </strong><br /><span class='small'><em><?php echo $rowsdb['nplace'] ?>&nbsp;&nbsp;<br /><?php echo $rowsdb['ntime'] ?>&nbsp;&nbsp;<?php echo $rowsdb['date'] ?></em></span>
							</span></td>
							<td><?php echo $rowsdb['ncontent'] ?></td>
							<td><p class="content-in"><?php echo $rowsdb['status'] ?><a href="index.php?page=notification-edit.php&id=<?php echo $rowsdb['id'] ?>" class='icons hidden-sm hidden-md hidden-lg' title='Edit Poster Details'><i class='fa fa-pencil'>&nbsp;</i></a></p></td>
							<td class="hidden-xs"><a href="index.php?page=notification-edit.php&id=<?php echo $rowsdb['id'] ?>" class='icons' title='Edit Poster Details'><i class='fa fa-pencil'>&nbsp;</i></a></td>
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