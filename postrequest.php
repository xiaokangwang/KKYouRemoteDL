<?php
/*
This is a script to record the things that user requested to get.
*/

//mysql connection infomation,change for your own server
$mysqlserv="";
$mysqlusr="";
$mysqlpasswd="";
$mysqldbname="";

//prepare infomation
$useremail=$_POST["email"];
$linktodl=$_POST["linktodl"];

//connect to MYSQL server
$con = mysql_connect($mysqlserv,$mysqlusr,$mysqlpasswd);
//select database
mysql_select_db($mysqldbname, $con);

//write request
$sql="INSERT INTO RequestsR (useremail, linktodl,isdone)
VALUES
('"$useremail"','"$linktodl"',0)";

//progress request
if (!mysql_query($sql,$con))
  {
  	//Sorry for that but request was unssuccessful , so tell the client request won't be progressed.
  	//TODO: tell client why
  	die("FAIL_SQL_REQDIE");
  }

//Finally show the successful signal to the client
echo "SUCC_REQADD";

?>