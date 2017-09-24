<body>
<form action="s6update.php">
<input name="supplierID" value="supplierID">
<input name="CompanyName " value="CompanyName">
<input name="city" value="city">
<input type="submit" value="s6update.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['supplierID'])) { exit; }
require("s1connect.php");
$sql="update $tb set ";
$sql.="supplierID='". $_GET['supplierID'] ."', ";
$sql.="CompanyName ='". $_GET['CompanyName '] ."', ";
$sql.="city='". $_GET['city'] ."' ";
$sql.="where supplierID='". $_GET['supplierID'] ."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0index.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0index.php'/>";
	mysql_close($connect);
}
?>
</body>