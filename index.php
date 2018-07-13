<?
include 'db.php'; 
?>
<html>
<head>

<title>QR Code Test</title>

</head>
<body class="bg">
<form name="f1" method="post" action="value.php">
<table border="1" align="center" id="tbl1" width="300px">
<tr>
<td align="right">Name :<font color="red">*</font></td>
<td align="left">
<input type="text"id="nm" name="nm" placeholder="Enter the Name">
</td>
</tr>
<tr>
<td align="right">addr :<font color="red">*</font></td>
<td align="left">
<input type="text"id="addr" name="addr">
</td>
</tr>
<tr>
<td align="right">Email :<font color="red">*</font></td>
<td align="left">
<input type="text"id="email" name="email">
</td>
</tr>
<tr>
<td align="right">Cont :<font color="red">*</font></td>
<td align="left">
<input type="text"id="cont" name="cont">
</td>
</tr>
<tr>
<td align="right" colspan="2"><input type="submit"value="Submit" class="button1"></td>
</tr>
</table>

<br><table id="tbl2" border="1"align="center">
<tr>
<td>Sl.</td>
<td>name</td>
<td>addr</td>
<td>email</td>
<td>cont</td>
<td>Action</td>
</tr>
<?
$cnt=0;
$data1=mysql_query("select * from tbl1 order by sl desc");
while($r1=mysql_fetch_array($data1))
{$cnt++;
$dsl=$r1['sl'];
$nm=$r1[nm];
$addr=$r1[addr];
$mail=$r1[mail];
$cont=$r1[cont];
?>
<tr>
<td><?=$cnt;?>.</td>
<td><?=$nm;?></td>
<td><?=$addr;?></td>
<td><?=$mail;?></td>
<td><?=$cont;?></td>
<td>
<a href="view.php?sl=<?=$dsl;?>" title="Edit"><img src="document-48.png" width="25px">
</a></td>
</tr>
<?
}
?>
</table>
</form>
</body>
</html>