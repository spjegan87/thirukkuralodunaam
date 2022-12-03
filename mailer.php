<?php
	ini_set('display_errors', '0');
	include('../../config/config.php');

	$ename = $_POST['ename'];
	$email = $_POST['email'];
	$mobileno = $_POST['mobileno'];
	$message = $_POST['message'];

	$sql ="insert into web_mailer (ename,email, mobileno, message) values ('$ename','$email','$mobileno','".mysql_real_escape_string($message)."')";

	echo $sql;
	exit;

	$query = mysql_query($sql);
	
	if($query == '1')
	{
		// To find the last inserting record
		$getmailid = " select * from web_mailer order by id desc limit 1;";
		$mailQuery = mysql_query($getmailid);
		$rows = mysql_fetch_array($mailQuery);

		$to= $rows['mailid'];
		// Your subject
		$subject="திருக்குறளோடு நாம் ";
		// From
		$headers =$rows['mailername'];
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$headers .= "CC: spjegan87@gmail.com";
		// Your message
		$message='<table cellspacing="0" cellpadding="0" border="0" width="630" align="center">
				<tr>
					<td height="60" bgcolor="#000" align="center"><font style="font-size:24px; font-family:arial; color:#fff;"><strong>திருக்குறளோடு நாம் </strong></font></td>
				</tr>
				<tr>
					<td valign="top"><table cellspacing="0" cellpadding="0" border="0" width="100%">
					<tr>
						<td width="30"><img width="30" height="1" alt="" src="../../images/spacer.gif"></td>
						<td valign="top"><table cellspacing="0" cellpadding="0" border="0" width="100%">
						<tr>
							<td height="20"></td>
						</tr>  
						<tr>
							<td style="font-size:16px; font-family:arial; color:#000;">
								<font style="font-size:16px; font-family:arial; color:#000;"><strong>Dear '.$rows['ename'].'</strong></font>
							</td>
						</tr>
						<tr>
							<td height="20"></td>
						</tr>  
						<tr>
							<td style="font-size:16px; font-family:arial; color:#000;">
								<font style="font-size:16px; font-family:arial; color:#000;"><strong>Dear '.$rows['message'].'</strong></font>
							</td>
						</tr>
						<tr>
							<td height="20"></td>
						</tr>
						<tr>
							<td style="font-size:14px; font-family:arial; color:#000;">
								<font style="font-size:14px; font-family:arial; color:#000;">உங்களின் மேலான கருத்தை பதிவு செய்தமைக்கு நன்றி.</font>
							</td>
						</tr>
						<tr>
							<td height="20"></td>
						</tr>
						</table></td>
						<td width="30"><img width="30" height="1" alt="" src="../../images/spacer.gif"></td>
					</tr>
					</table></td>
				</tr>
				<tr>
					<td height="10"><img width="1" height="10" alt="" src="../../images/spacer.gif"></td>
				</tr>
				<tr>
					<td height="5" bgcolor="#000"></td>
				</tr>
			</table>';
		// send email
		$sentmail = mail($to,$subject,$message,$headers);
		// if your email succesfully sent
		if($sentmail == '1')
		{
			header('location:'.$localpath.'/thanks.php');
		}
	}
?>