<?php
	include('../../config/config.php');
	ini_set("display_errors",0);

	$sql = "select * from keywords_register";
	$dataShow = mysql_query("select * from keywords_register ORDER BY 1 ASC");
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
	$count = mysql_num_rows($query);
?>
<form action='../sql_query/keywords_delete.php' method='post'>
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Social Service Project Details</h4>
		<div class='row'>
			<div class='col-sm-12'>
				<div class='panel-type-bg'>
					<h4 class="inner-title">Latest added service posters <p class='pull-right search-field'><input type='text' name='' placeholder='Search Members' class='form-control searchbox'></p></h4>
					<?php if(isset($_GET['msg']) and $_GET['msg'] == 'keywordsdelete') echo "<p class='error-msg'>1 Record deleted successfully.</p>"; if(isset($_GET['msg']) and $_GET['msg'] == 'keywordsupdate') echo "<p class='error-success'>Record updated successfully.</p>";?>
					<table class='table table-bordered admin-table'>
						<tr>
							<th width='45' class='hidden-xs'>ID</th>
							<th width='300'>Website Title</th>
							<th>Website Keywords</th>
							<th>Website Description</th>
							<th width='100' class='hidden-xs'>Action</th>
						</tr>
						<tbody class="myTable">
						<?php 
							while($rowsdb = mysql_fetch_array($dataShow))
							{
						?>
						<tr>
							<td class='hidden-xs'><?php echo $rowsdb['id'] ?></td>
							<td><?php echo $rowsdb['wtitle'] ?></td>
							<td><?php echo $rowsdb['wkeywords'] ?></td>
							<td class='hidden-xs'><?php echo $rowsdb['status'] ?></td>
							<td><span class="hidden-sm hidden-md hidden-lg"><?php echo $rowsdb['status'] ?></span>
							<br class="hidden-sm hidden-md hidden-lg">
							<a href="index.php?page=keywords-edit.php&id=<?php echo $rowsdb['id'] ?>" class='icons' title='Edit Keywords Details'><i class='fa fa-pencil'>&nbsp;</i></a><button type='submit' class='icons mar-rgtlft-20 brdr-none no-shadow <?php if($count == 0) echo "hide"; ?>' name='delete'value='<?php echo $rowsdb['id'] ?>' title='Delete Poster Details'onclick="return confirm('Are you sure want to delete this record?')"><i class='fa fa-trash'>&nbsp;</i></button></td>
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
						<tr class="no-data hidden-xs">
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