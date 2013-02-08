<?php
/*
In this script,we will call the youtube-dl to download the movie, 
as well as we respond the url of the file we will provide user to download.
*/

require_once("lib.php");


/*
prepare request detail
*/

//get from post
$requestedURL_base64=$_POST["urlb64"];

//debase64
$requestedURL_org=base64_decode($requestedURL_base64);

//check if it is a good one.
if(!checkreq($requestedURL_org)){
	die("REQ_NOT_ACCEPT");	
}

//

?>