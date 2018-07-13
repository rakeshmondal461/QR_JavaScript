<?
include 'db.php';
$sl=$_REQUEST['sl'];

$q1 = "SELECT * FROM tbl1 where sl='$sl'";
$r1= mysql_query($q1);

while ($R = mySql_fetch_array ($r1))
{
 $b="<br>";
 $nm=$R['nm'];
 $addr=$R['addr'];
 $mail=$R['mail'];
 $cont=$R['cont'];
 $concate="Name:".$nm."  "."Address:".$addr." "."Mail:".$mail." "."Contact No:".$cont;
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
<title>Cross-Browser QRCode generator for Javascript</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="qrcode.js"></script>
	</head>
<body class="bg">
<center>
<div id="qrcode" style="width:180px; height:180px; margin-top:15px;"></div></center>
<input type="hidden" style="width:80%" id="text" name="text"  value="<?=$concate;?>">

	
	<script type="text/javascript">
  var qrcode = new QRCode(document.getElementById("qrcode"), {
      width : 100,
      height : 100,
      useSVG: true
  });

  function makeCode () {		
      var elText = document.getElementById("text");

      if (!elText.value) {
          alert("Input a text");
          elText.focus();
          return;
      }

      qrcode.makeCode(elText.value);
  }

  makeCode();

  $("#text").
      on("blur", function () {
          makeCode();
      }).
      on("keydown", function (e) {
          if (e.keyCode == 13) {
              makeCode();
          }
      });
    </script>
	
<br><center><a href="index.php">Back</a></center>
</body>
</html>