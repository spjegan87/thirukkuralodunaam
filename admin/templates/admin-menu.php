<?php 
	$username = $_SESSION['username'];
	$sqlfetch = "select * from admin_register where username='".$username."'";
	$querydb = mysql_query($sqlfetch);
	while($row = mysql_fetch_assoc($querydb))
	{
		if($row['usertype'] == "normal")
		{
			echo "<form method='post' action=''><ul class='admin-menu'><li><a href='index.php?page=dashboard.php'><i class='fa fa-dashboard'>&nbsp;</i> Dashboard</a></li><li><a href='index.php?page=userdetails.php'><i class='fa fa-user'>&nbsp;</i> Users Details</a></li></ul></form>";
		}
		elseif($row['usertype'] == "admin")
		{
			echo "<form method='post' action=''><ul class='admin-menu'><li><a href='index.php?page=dashboard.php'><i class='fa fa-dashboard'>&nbsp;</i> Dashboard</a></li><li><a href='index.php?page=keywords.php'><i class='fa fa-text-width'>&nbsp;</i>Keywords Controller</a></li><li><a href='javascript:;'><i class='fa fa-bars' aria-hidden='true'>&nbsp;</i> Home Pages <span class='arrow'></span></a><ul class='sub-menu'><li><a href='index.php?page=homepagebanner.php'>Banner Content<br /><span>முகப்பு பக்கம்</span></a></li><li><a href='index.php?page=usefulwords.php'>Useful words<br /><span>பயனுள்ள வார்த்தைகள்</span></a></li><li><a href='index.php?page=web-index-content.php'>About Thiruvalluvar<br /><span>முகப்பு பக்கம்</span></a></li><li><a href='index.php?page=web-about-page.php'>Useful words<br /><span>எங்களை பற்றி</span></a></li><li><a href='index.php?page=gallery.php'>Gallery Page <br /><span>குழு புகைப்படங்கள்</span></a></li><li><a href='index.php?page=allnotification.php'>Notification Page <br /><span>தற்காலிக செய்திகள்</span></a></li></ul></li><li><a href='index.php?page=aboutuspage.php'><i class='fa fa-user' aria-hidden='true'>&nbsp;</i>About us page </a></li><li><a href='index.php?page=bookpage.php'><i class='fa fa-book'>&nbsp;</i> Books</a></li><li><a href='index.php?page=kuralvideo.php'><i class='fa fa-video-camera' aria-hidden='true'>&nbsp;</i>Thirukkural Videos </a></li><li><a href='index.php?page=social-service.php'><i class='fa fa-globe'>&nbsp;</i> Social Service Updates</a></li><li><a href='index.php?page=newspaper.php'><i class='fa fa-newspaper-o' aria-hidden='true'>&nbsp;</i>Newspaper updates</a></li><li><li><a href='index.php?page=thirukkural-register.php'><i class='fa fa-tint'>&nbsp;</i>1330 Thirukkural</a></li><li><a href='index.php?page=gallery.php'><i class='fa fa-camera-retro'>&nbsp;</i> Gallery Page</a></li><li><a href='index.php?page=youtubevideo.php'><i class='fa fa-youtube'>&nbsp;</i> Youtube Video Page <br /></a></li><li><a href='index.php?page=demo-contact.php'><i class='fa fa-phone'>&nbsp;</i> Contact Information</a></li><li><a href='index.php?page=allcomments.php'><i class='fa fa-book'>&nbsp;</i> Website Comments</a></li></ul><p class='footer-empty'></p></form>";
		}
	}
?>