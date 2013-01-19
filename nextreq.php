<?php
/*
This is a script to make a line-based download info so that we will able to download it by youtube-dl
*/

//TODO:(UP)

//mysql connection infomation,change for your own server
$mysqlserv="";
$mysqlusr="";
$mysqlpasswd="";
$mysqldbname="";

//connect to MYSQL server
$con = mysql_connect($mysqlserv,$mysqlusr,$mysqlpasswd);
//select database
mysql_select_db($mysqldbname, $con);


?>