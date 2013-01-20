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

//Infomation for requst which is now being progress
$id=-1;
$useremail="";
$linktodl="";

//connect to MYSQL server
$con = mysql_connect($mysqlserv,$mysqlusr,$mysqlpasswd);

//select database
mysql_select_db($mysqldbname, $con);

//write request
$sql="SELECT * 
FROM  `RequestsR` 
WHERE  `useremail` IS NOT NULL 
AND  `linktodl` IS NOT NULL 
AND  `isdone` =0
LIMIT 0 , 1";

//progress request
$result = mysql_query($sql,$con);

//fetch infomation if there is somethings to do
while($row = mysql_fetch_array($result))
  {
  	$id=$row["id"];
	$useremail=$row["useremail"];
	$linktodl=$row["linktodl"];
  }

 if($id!=-1){ //Knowing if theres a request to be proceed
 	
 	//if we are here, there is a request , and now we can write it to a file so that 
 	//It can be knowed by godownload.cpp

 	//TODO:Write it to file

 	//Update MYSQL so that the request will be marked as completed
	
	//Prepare MYSQL request
	$sql="UPDATE RequestsR
	SET isdone = 1
	WHERE id = '.$id.'";

	//progress request
	$result = mysql_query($sql,$con);

	//We are ready to stop this script
 }else{
 	//if we are here , there is no request to be proceed ,just quit is okay.
 }

?>