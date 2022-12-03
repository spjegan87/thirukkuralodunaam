<?php
	include('../../config/config.php');
	ini_set("display_errors",0);

	$sql = "select * from gallery_register where status='Y'";
	$dataShow = mysql_query("select * from gallery_register where status='Y'");
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
	$count = mysql_num_rows($query);
?>
<form action='../sql_query/gallery_updates_delete.php' method='post'>
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Social Media Poster Details <a href="index.php?page=gallery.php" class='pull-right icons'><i class="fa fa-plus-square-o" aria-hidden="true">&nbsp;</i>Add Gallery</a></h4>
		<div class='row'>
			<div class='col-sm-12'>
				<div class='panel-type-bg'>
					<h4 class="inner-title">Latest added posters <p class='pull-right search-field'><input type='text' name='' placeholder='Search Members' class='form-control searchbox'></p></h4>
					<p class="text-success"><?php if(isset($_GET['msg']) and $_GET['msg'] == 'imgupdate') echo "1 Gallery Added Successfully."; ?></p>
					<table class='table table-bordered admin-table'>
						<tr>
							<th>Gallery Title</th>
							<th colspan='5'>Gallery Images</th>
							<th>Action</th>
						</tr>
						<tbody class="myTable">
						<?php 
							while($rowsdb = mysql_fetch_array($dataShow))
							{
						?>
						<tr>
							<td width='120'><?php echo $rowsdb['gallerytitle'] ?></td>
							<td width='100' align='center'>
								<img src="../galleryphotos/<?php echo $rowsdb['photo'] ?>" width="100%" height="80" alt="" />
							</td>
							<td width='100' align='center'>
								<img src="../galleryphotos/<?php echo $rowsdb['photo1'] ?>" width="100%" height="80" alt="<?php echo $rowsdb['gallerytitle'] ?>" title="<?php echo $rowsdb['gallerytitle'] ?>" />
							</td>
							<td width='100' align='center'>
								<img src="../galleryphotos/<?php echo $rowsdb['photo2'] ?>" width="100%" height="80" alt="<?php echo $rowsdb['gallerytitle'] ?>" title="<?php echo $rowsdb['gallerytitle'] ?>" />
							</td>
							<td width='100' align='center'>
								<img src="../galleryphotos/<?php echo $rowsdb['photo3'] ?>" width="100%" height="80" alt="<?php echo $rowsdb['gallerytitle'] ?>" title="<?php echo $rowsdb['gallerytitle'] ?>" />
							</td>
							<td width='100' align='center'>
								<img src="../galleryphotos/<?php echo $rowsdb['photo4'] ?>" width="100%" height="80" alt="<?php echo $rowsdb['gallerytitle'] ?>" title="<?php echo $rowsdb['gallerytitle'] ?>" />
							</td>
							<td width='120'><a href="index.php?page=gallery-edit.php&id=<?php echo $rowsdb['id'] ?>" class='icons' title='Edit Poster Details'><i class='fa fa-pencil'>&nbsp;</i></a><button type='submit' class='icons mar-rgtlft-20 brdr-none no-shadow <?php if($count == 0) echo "hide"; ?>' title='Delete Poster Details' name='delete' value='<?php echo $rowsdb['id'] ?>' onclick="return confirm('Are you sure want to delete this record?')"><i class='fa fa-trash'>&nbsp;</i></button></td>
						</tr>
						<?php
							}
							if($count == 0)
							{
						?>
								<tr><td class='text-center text-danger' colspan='7'>No record found</td></tr>
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