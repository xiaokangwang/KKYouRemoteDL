<?php
/*
This is a script to record the things that user requested to get.
*/

//mysql connection infomation,change for your own server
$mysqlserv="";
$mysqlusr="";
$mysqlpasswd="";


$useremail=$_POST["email"];
$linktodl=$_POST["linktodl"];
$con = mysql_connect($mysqlserv,$mysqlusr,$mysqlpasswd);
?>