<?PHP
$server = "localhost"; 	// often localhost
$username = "root"; 			// Your MySQL server username
$password = ""; 			// Your MySQL server password
$database = "testqr"; 			// If you fill in nothing database 'members' will be used. If 'members' doesn't exist it will be created.

$c1="Improper Hosting!";
$c2="No Such Database Found!";

	$conn = mysql_connect($server,$username,$password) or die ($c1); 
	mysql_select_db($database,$conn) or die ($c2);
?>