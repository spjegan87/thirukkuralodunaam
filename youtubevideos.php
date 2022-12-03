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
					Youtube Videos<br />
					<span>&nbsp;</span>
				</h2>
				<p class="text-center lhgt28">பொதுவாகவே எனக்கு புத்தகம் வாசிக்கும் பழக்கம் அதிகம், அதிலும் திருக்குறளுக்கு எந்தெந்த கதைகள் கட்சிதமாக அமைய வேண்டும் என்பதற்காக நான் படிக்காத புத்தகங்களே இல்லை எனலாம். அதன் மூலமாக நான் எண்ணற்ற புத்தகங்களை நான் படிக்க முடிந்தது ஏன் எனது படைப்பை புத்தகமாக வெளியிடக்கூடாது என எண்ணி நான் சில புத்தகங்களை வெளியிடுகிறேன் இதன் வாயிலாக.</p>
			</div>
		</div>
		<div class="service-container">
			<div class="row">
				<!-- Service Page Start -->
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

					$sql = "SELECT * FROM ytvideo_register  where status='Active' ORDER BY id ASC LIMIT $start_from, $limit";
					$rs_result = mysql_query($sql);  
				?>
				<?php  
					while ($row = mysql_fetch_assoc($ytquery)) {
				?> 
				<div class="col-md-4 pagecount">
					<div class="v-container">
						<iframe src="<?php echo $row['yturl'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<p><?php echo $row['ytname'] ?></p>
					</div>
				</div>  
				<?php
					};
				?>
				<?php 
					$sql = "SELECT COUNT(id) FROM ytvideo_register";
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
				<!-- Service Page End -->
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
		hrefTextPrefix : 'services.php?page='
		});
	}
});
</script>
<!-- Footer included -->