<?php 
	include('../config/config.php');
	include('pagequery.php');
?>
	
	<!-- Footer Start -->
	<div class="footer footer-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h4>கருத்து பதிவுகள் </h4>
					<div id="news-container1">
						<ul class="comments">
							<?php 
							while($frows = mysql_fetch_array($fquery))
							{
							?>
							<li><span>📌</span><p><?php echo $frows['fmessage'] ?></p>
							<a href="comments.php?id=<?php echo $frows['id'] ?>"><?php echo $frows['fname'] ?>.</a>
							</li>
							<?php
							}
							?>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 gallery">
					<h4>புகைப்படங்களின் தொகுப்பு </h4>
					<?php 
					while($flrows = mysql_fetch_array($galleryquery))
					{
					?>
					<a href="gallery.php?id=<?php echo $flrows['id'] ?>"><img src="admin/galleryphotos/<?php echo $flrows['photo']?>" alt="<?php echo $flrows['gallerytitle'] ?>"  title="<?php echo $flrows['gallerytitle'] ?>"/></a>
					<?php
						}
					?>
				</div>
				<div class="col-sm-4">
					<h4>உங்கள் செய்திகளை சமர்ப்பிக்கவும்</h4>
					<!-- <form action="admin/sql_query/fmailer.php" class="footer-form" method="post" autocomplete="off"> -->
					<form action="javascript:;" class="footer-form" method="post" autocomplete="off">
						<?php
						# To display the feedback error message from the session
						if(isset($_SESSION['feedback'])): ?>
							<div class="error">
								<?php echo $_SESSION['feedback']['message']; ?>
							</div>
						<?php
						endif;

						# To get the feedback form values from the session
						function getSessionFeedback($field) {
							if(isset($_SESSION['feedback'][$field]))
								return $_SESSION['feedback'][$field];
							return '';
						}
						?>
						<div class="form-group">
							<input type="text" class="form-control" id="fname" name="fname" placeholder="பெயர் " value="<?php echo getSessionFeedback('fname');?>" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="fmailid" name="fmailid" placeholder="மின்னஞ்சல் " value="<?php echo getSessionFeedback('fmailid');?>" required>
						</div>
						<div class="form-group">
							<textarea class="form-control" name="fmessage" id="fmessage" placeholder="உங்கள் செய்திகளை பதிவு செய்யவும் " required><?php echo getSessionFeedback('fmessage');?></textarea>
						</div>
						<button type="submit" class="btn custom-btn-reverse btn-anim">Submit</button>
					</form> 
				</div>
			</div>
			<div class="row copyright">
				<div class="col-sm-6">
					&copy; <?php echo date("Y") ?> All Rights Reserved. www.thirukkuralodunaam.com
				</div>
				<div class="col-sm-6">
					<div class="text-right social-link">
						<a href="https://www.facebook.com/R.ThirunavukkarasuIPS/" class="fb">&nbsp;</a>
						<a href="https://www.youtube.com/channel/UCKWKT47y4s6ZD-xcQqktmkg" class="yt">&nbsp;</a>
						<a href="mailto:<?php echo $arows['aemail']?>" class="mail">&nbsp;</a>
					</div>
				</div>
			</div>
		</div>
		<a href="javascript:;" title="Top" class="cd-top">Top</a>
	</div>
	<!-- Footer End -->
</div>
<!-- Header included -->
<?php 
	include('script.php');

	# To remove the feedback form values from the session
	if(isset($_SESSION['feedback']))
		unset($_SESSION['feedback']);
	# To remove the contact us form values from the session
	if(isset($_SESSION['contactus']))
		unset($_SESSION['contactus']);
?>
<!-- Header included -->
</body>
</html>