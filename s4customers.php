<body>
<form action="s4customers.php">
<input name="customerid" value="your's ID">
<input name="companyname" value="your's name">
<input name="contactname" value="your's company">
<input type="submit" value="s4customers.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['customerid']) || !isset($_GET['companyname'])|| !isset($_GET['contactname'])) exit;
require("s1customers.php");
$sql="insert into $tb values('".$_GET['customerid']."','".$_GET['companyname']."','".$_GET['contactname']."')";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	mysql_close($connect);
}
?>
</body>