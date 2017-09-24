<?php
/* updated for php7 and php 5 on 2560-09-13 */
/* Section 1 : include */
if(file_exists("s1connect.php")) 
  require("s1connect.php"); //การร้องขอแบบจำเป็นแบบครั้งเดียวจบ
else
  die("File not found");

/* Section 2 : main activity */
if ($dbstatus == 0) dbWork("create database $db");
qWork("create table $tb (supplierID int(4),CompanyName varchar(40),city varchar(30))");
qWork("insert into $tb values('5031','KKOLO',' BKK')");
qWork("insert into $tb values('5032','YAMATO',' LAMPANG')");
qWork("insert into $tb values('5033','pototacal',' NAN')");
qWork("insert into $tb values('5034','popcronm',' CHAINGMAI')");
qWork("insert into $tb values('5035,'erroring',' PATTAYA')");
if((int)phpversion() >= 7) $connect->close(); else mysql_close($connect);
echo '<a href="s0index.php">back</a>';

/* Section 3 : function */
function dbWork($sql) {
	global $db,$host,$uname,$upass,$connect;	
	if((int)phpversion() >= 7) {
		if ($connect->query($sql) === FALSE) 
			echo "$sql : failed ". $conn->error . "<br/>";
		else {
			echo "$sql : succeeded<br/>";
			$connect = new mysqli($host, $uname, $upass, $db);
		}
	} else { 
		if (!$result=mysql_query($sql,$connect))
			echo "$sql : failed<br/>"; 
		else 
			echo "$sql : succeeded<br/>";  
	}
}	
function qWork($sql) {
	global $connect,$db;
	if((int)phpversion() >= 7) {
		if ($connect->query($sql) === FALSE) 
			echo "$sql : failed ". $conn->error . "<br/>";
		else 
			echo "$sql : succeeded<br/>";
	} else {   
		if (!$result=mysql_db_query($db,$sql))
			echo "$sql : failed<br/>"; 
		else 
			echo "$sql : succeeded<br/>";  
	}
}	
?>