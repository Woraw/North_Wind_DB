<body>
<form action="s6shippers.php">
<input name="ShipperID" value="ID">
<input name="CompanyName " value="company">
<input name="Phone" value="chula">
<input type="submit" value="s6shippers.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['ShipperID'])) { exit; }
require("s1shippers.php");
$sql="update $tb set ";
$sql.="ShipperID='". $_GET['ShipperID'] ."', ";
$sql.="CompanyName ='". $_GET['CompanyName '] ."', ";
$sql.="Phone='". $_GET['Phone'] ."' ";
$sql.="where ShipperID='". $_GET['ShipperID'] ."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0shippers.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0shippers.php'/>";
	mysql_close($connect);
}
?>
</body>