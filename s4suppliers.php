<body>
<form action="s4insert.php">
<input name="supplierID" value="supplierID">
<input name="CompanyName " value="CompanyName">
<input name="city" value="city">
<input type="submit" value="s4insert.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['supplierID']) || !isset($_GET['CompanyName '])|| !isset($_GET['city'])) exit;
require("s1connect.php");
$sql="insert into $tb values('".$_GET['supplierID']."','".$_GET['CompanyName ']."','".$_GET['city']."')";
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