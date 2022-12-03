<?php
	include('../../config/config.php');
	ini_set("display_errors",0);

	$sql = "select * from duwords where status='Active'";
	$dataShow = mysql_query("select * from duwords where status='Active'");
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
	$count = mysql_num_rows($query);
?>
<form action='../sql_query/duwordsdelete.php' method='post'>
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Home Page Useful Words Details <a href="index.php?page=usefulwords.php" class='pull-right icons'><i class="fa fa-plus-square-o" aria-hidden="true">&nbsp;</i>Add New Words</a></h4>
		<div class='row'>
			<div class='col-sm-12'>
				<div class='panel-type-bg'>
					<h4 class="inner-title">Latest added words <p class='pull-right search-field'><input type='text' name='' placeholder='Search Members' class='form-control searchbox'></p></h4>
					<p class="error-msg"><?php if(isset($_GET['msg']) and $_GET['msg'] == 'posterdelete') echo "1 Record deleted successfully."; ?></p>
					<table class='table table-bordered admin-table'>
						<tr>
							<th>Useful words content</th>
							<th class="w15">Active Status</th>
						</tr>
						<tbody class="myTable">
						<?php 
							while($rowsdb = mysql_fetch_array($dataShow))
							{
						?>
						<tr>
							<td><?php echo $rowsdb['uwords'] ?></td>
							<td><a href="index.php?page=usefulwordsedit.php&id=<?php echo $rowsdb['id'] ?>" class='icons' title='Edit Poster Details'><i class='fa fa-pencil'>&nbsp;</i></a><button type='submit' class='icons mar-rgtlft-20 brdr-none no-shadow <?php if($count == 0) echo "hide"; ?>' title='Delete Poster Details' name='delete' value='<?php echo $rows['id'] ?>' onclick="return confirm('Are you sure want to delete this record?')"><i class='fa fa-trash'>&nbsp;</i></button></td>
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