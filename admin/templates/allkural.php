<?php
	include('../../config/config.php');
	ini_set("display_errors",0);

	$sql = "select * from thirukkural where status='Active'";
	$dataShow = mysql_query("select * from thirukkural where status='Active' ORDER BY 1 ASC");
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
	$count = 1;
?>
<form action='../sql_query/kural_delete.php' method='post'>
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Social Service Project Details <a href="index.php?page=thirukkural-register.php" class='pull-right icons'><i class="fa fa-plus-square-o" aria-hidden="true">&nbsp;</i>Add New Thirukkural Posts</a></h4>
		<div class='row'>
			<div class='col-sm-12'>
				<div class='panel-type-bg'>
					<h4 class="inner-title">Latest added service posters <p class='pull-right search-field'><input type='text' name='' placeholder='Search Members' class='form-control searchbox'></p></h4>
					<?php if(isset($_GET['msg']) and $_GET['msg'] == 'kuraldelete') echo "<p class='error-msg'>1 Record deleted successfully.</p>";?>
					<table class='table table-bordered admin-table kural-table'>
						<tr>
							<th width='120'>Thirukkural No</th>
							<th>Thirukkural</th>
							<th  width='100' class='hidden-xs'>Action</th>
						</tr>
						<tbody class="myTable">
						<?php 
							while($rowsdb = mysql_fetch_array($dataShow))
							{
						?>
						<tr>
							<td><?php echo $count++ ?></td>
							<td><p class="content-in"><?php echo $rowsdb['tkural'] ?></td>
							<td><a href="index.php?page=thirukkural-edit.php&id=<?php echo $rowsdb['id'] ?>" class='icons' title='Edit Poster Details'><i class='fa fa-pencil'>&nbsp;</i></a><button type='submit' class='icons mar-rgtlft-20 brdr-none no-shadow <?php if($count == 0) echo "hide"; ?>' name='delete'value='<?php echo $rowsdb['id'] ?>' title='Delete Poster Details'onclick="return confirm('Are you sure want to delete this record?')"><i class='fa fa-trash'>&nbsp;</i></button></td>
						</tr>
						<?php
							}
							if($count == 0)
							{
						?>
								<tr><td class='text-center text-danger' colspan='3'>No record found</td></tr>
						<?php
							}
						?>
						<tr class="no-data">
							<td colspan="3" class="text-center">
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