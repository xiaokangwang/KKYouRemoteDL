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


?>