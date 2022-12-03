<!-- Include header part -->
<?php 
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
					நாளிதழ் செய்திகள்<br />
					<span>&nbsp;</span>
				</h2>
				<p class="text-center lhgt28">திருவள்ளுவரது இயற்பெயர், வாழ்ந்த இடம் உறுதியாகத் தெரியவில்லை எனினும் அவர் கி.மு. முதல் நூற்றாண்டில், தற்போதைய சென்னை நகருக்கருகில், மயிலாப்பூரில் வாழ்ந்து வந்தார் என்று தமிழக அரசு அறிவித்துள்ளது. காவிரிப்பக்கம் அருகில் வாழ்ந்து வந்த மார்கசெயன் என்பவர் அவரது கவித்திறன் கண்டு அவரது ஒரு புதல்வியான வாசுகியை வள்ளுவருக்கு மணம் முடித்ததாகவும் அறியப்படுகிறது [2]. மதுரை நகரில் வாழ்ந்ததாகவும் கருத்துண்டு. </p>
			</div>
		</div>
		<div class="service-container">
			<div class="row">
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

					$sql = "SELECT * FROM newspaper_register where status='Active' ORDER BY id DESC LIMIT $start_from, $limit";  
					$rs_result = mysql_query($sql);  
				?>
				<?php  
					while ($row = mysql_fetch_assoc($rs_result)) {
				?> 
				<!--  -->
				<div class="col-md-4">
					<div class="news-container">
						<div class="news-top">
							<img src="admin/newsreport/<?php echo $row['photo'] ?>" width="80" height="80" border="0" alt="" class="img-circle" align="left" />
							<p>
								<?php echo $row['newstitle'] ?>
							</p>
						</div>
						<div class="news-bot">
							<div class="newscontent"><?php echo $row['newscontent'] ?></div>
							<p><?php echo $row['date'] ?> <a href="newspageexp.php?id=<?php echo $row['id'] ?>" class="btn-link pull-right">மேலும் தொடர</a></p>
						</div>
					</div>
				</div>
				<?php
					};
				?>
				<?php 
					$sql = "SELECT COUNT(id) FROM newspaper_register";
					$rs_result = mysql_query($sql);  
					$row = mysql_fetch_row($rs_result); 
					$total_records = $row[0];
					$total_pages = ceil($total_records / $limit);   
					$pagLink = "<div class='text-center pagedisp'><nav><ul class='pagination custom-pagination'>";
					for ($i=1; $i<=$total_pages; $i++)
					{  
						$pagLink .= "<li><a href='videos.php?page=".$i."'>".$i."</a></li>";  
					};  
					echo $pagLink . "</ul></nav></div>";  
				?>
				<!--  -->
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
	/* Display the pagination */
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
		hrefTextPrefix : 'newspage.php?page='
		});
	}
});
</script>
<!-- Footer included -->