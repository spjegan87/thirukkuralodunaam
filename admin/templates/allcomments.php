<?php
	include('../../config/config.php');
	ini_set("display_errors",0);

	$sql = "select * from footer_comment where status='Active'";
	$dataShow = mysql_query("select * from footer_comment ORDER BY 1 ASC");
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
	$count = mysql_num_rows($query);
?>
<form action='../sql_query/footer_comments_delete.php' method='post'>
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Social Service Project Details</h4>
		<div class='row'>
			<div class='col-sm-12'>
				<div class='panel-type-bg'>
					<h4 class="inner-title">Latest added service posters <p class='pull-right search-field'><input type='text' name='' placeholder='Search Members' class='form-control searchbox'></p></h4>
					<?php if(isset($_GET['msg']) and $_GET['msg'] == 'commentsdelete') echo "<p class='error-msg'>1 Record deleted successfully.</p>"; if(isset($_GET['msg']) and $_GET['msg'] == 'commentsupdate') echo "<p class='error-success'>Record updated successfully.</p>";?>
					<table class='table table-bordered admin-table'>
						<tr>
							<th width='45'><input type="checkbox" id="checkAl"></th>
							<th width='300'>Commenter Name</th>
							<th>Commenter Comment</th>
							<th>Commenter Status</th>
							<th width='100' class='hidden-xs'>Action</th>
						</tr>
						<tbody class="myTable">
						<?php 
							$i=0;
							while($rowsdb = mysql_fetch_array($dataShow))
							{
						?>
						<tr>
							<td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $rowsdb["id"]; ?>"></td>
							<td><?php echo $rowsdb['fname'] ?><br /><span class="small"><em><?php echo $rowsdb['fmailid'] ?></em></span></td>
							<td><?php echo $rowsdb['fmessage'] ?></td>
							<td class='hidden-xs'><?php echo $rowsdb['status'] ?></td>
							<td><span class="hidden-sm hidden-md hidden-lg"><?php echo $rowsdb['status'] ?></span>
							<br class="hidden-sm hidden-md hidden-lg">
							<a href="index.php?page=footer-comment-edit.php&id=<?php echo $rowsdb['id'] ?>" class='icons' title='Edit Poster Details'><i class='fa fa-pencil'>&nbsp;</i></a></td>
						</tr>
						<?php
							}
							if($count == 0)
							{
						?>
								<tr><td class='text-center text-danger' colspan='4'>No record found</td></tr>
						<?php
							$i++;
							}
						?>
						<tr class="no-data hidden-xs">
							<td colspan="7" class="text-center">
								No record found.
							</td>
						</tr>
						<tr>
							<td colspan="7" class="text-center">
								<button type="submit" class="btn custom-btn admin-btn hvr-float-shadow shadow-2 fn-confirmation show-bg" name="save">DELETE</button>
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