<?php
	ini_set('display_errors', '0');
	include('../../config/config.php');
	$getTime = date('m/d/Y h:i:s a', time());
	$emailid = $_POST['emailid'];
	
	// Check mail id is valid on not
	$checksql ="select email from admin_register where email='$emailid'";
	$checkquery = mysql_query($checksql);
	$result = mysql_num_rows($checkquery);
	if($result == 1)
	{
		// Update password query based on email
		$sql ="UPDATE admin_register SET req_pwd_change='$getTime' where email='".$emailid."'";
		$query = mysql_query($sql);

		if($query == '1')
		{
			// To find the last inserting record
			//$localpathserver = "http://".$_SERVER['HTTP_HOST']."/thirukkuralodunaam/reset.php/".$setMd5;
			//$redireturl = "http://".$_SERVER['HTTP_HOST']."/thirukkuralodunaam/admin/reset.php";
			
			$to= $emailid;
			$sendMd5 = md5($emailid);
			// Your subject
			$subject="திருக்குறளோடு நாம்";
			// From
			$headers =$rows['mailername'];
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$headers .= "CC: spjegan87@gmail.com";
			// Your message
			$message='<table cellspacing="0" cellpadding="0" border="0" width="900" align="center">
					<tr>
						<td height="60" bgcolor="#000" align="center"><font style="font-size:24px; font-family:arial; color:#fff;"><strong>திருக்குறளோடு நாம் </strong></font></td>
					</tr>
					<tr>
						<td valign="top"><table cellspacing="0" cellpadding="0" border="0" width="100%">
						<tr>
							<td width="30"><img width="30" height="1" alt="" src="../../images/spacer.gif"></td>
							<td valign="top"><table cellspacing="0" cellpadding="0" border="0" width="100%">
							<tr>
								<td height="40"><img width="1" height="40" alt="" src="../../images/spacer.gif"></td>
							</tr>
							<tr>
								<td style="font-size:16px; font-family:arial; color:#000;">
									<font style="font-size:16px; font-family:arial; color:#000;">Please click here below link and reset your password.</font>
								</td>
							</tr>
							<tr>
								<td height="30"><img width="1" height="30" alt="" src="../../images/spacer.gif"></td>
							</tr>
							<tr>
								<td style="font-size:16px; font-family:arial; color:#000;">
									<font style="font-size:16px; font-family:arial; color:#000;"><input type="hidden" name="resetpwd" value="'.$emailid.'" /><a href="http://localhost/thirukkuralodunaam/admin/reset.php?emailid='.$sendMd5.'">http://localhost/thirukkuralodunaam/admin/reset.php?emailid='.$sendMd5.'</a></font>
								</td>
							</tr>
							<tr>
								<td height="30"><img width="1" height="30" alt="" src="../../images/spacer.gif"></td>
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
			echo $message;
			exit;
			$sentmail = mail($to,$subject,$message,$headers);
			// if your email succesfully sent
			if($sentmail == '1')
			{
				header('location:'.$localpath.'/admin/index.php?msg=mailsent');
			}
		}
	}	
	else
	{
		header('location:'.$localpath.'/admin/index.php?msg=invalidmail');
	}
?>