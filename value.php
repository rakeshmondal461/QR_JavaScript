<?
include 'db.php';
$nm=$_POST[nm];
$addr=$_POST[addr];
$mail=$_POST[email];
$cont=$_POST[cont];
	if($nm=='' or $addr=='')
	{
?>
<script language="javascript">
alert('Please fill all mandatory fields!');
window.history.go(-1);
</script>
<?	}
else
{
$sql = "insert into tbl1 (nm,addr,mail,cont) values('$nm','$addr','$mail','$cont')";
$result = mysql_query($sql);
?>
<script language="javascript">
alert('Added Successfully. Thank You...');
document.location = "index.php";
</script>
<?
}
?>
