<body>
<form action="s4shippers.php">
<input name="ShipperID" value="employee ID">
<input name="CompanyName " value="last name">
<input name="Phone" value="first name">
<input type="submit" value="s4shippers.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['ShipperID']) || !isset($_GET['CompanyName '])|| !isset($_GET['Phone'])) exit;
require("s1shippers.php");
$sql="insert into $tb values('".$_GET['ShipperID']."','".$_GET['CompanyName ']."','".$_GET['Phone']."')";
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