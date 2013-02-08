<?php
/*
library for the whole solution
*/
function filename2out($filename){
	$outtext="Finished!".PHP_EOL.
	         "Link:".
	         '<a href="'."cache/".$filename.'"'.">".
	         $filename
	         ."</a>";
	return $outtext;


}

function retval2text($retval){
	if($retval){
	//NOT good
	return "BAD_RETURN_VALUE:".$retval;
	}
	else{
	//Good!
	return "OK";
	}
}

function checkreq($requestURL){

	//request mustn't be empty
	if($requestURL==""){
		return -1;
	}

	//in the submited url should not include ' or "
	if(stripos($requestURL,'"')!=false||stripos($requestURL,"'")!=false){
		return -1;
	}

	//if we are still here it is okay to return 0 means it is ok
	return 0;
	}


function getnamefromout($out){

	//get the name from out put
	$pathline="[download] Destination:";
	$remain=stristr($out,$pathline);
	$urlws=substr($remain,strlen($pathline),stripos($remain,PHP_EOL)-strlen($pathline));
	$url=trim($urlws);

	//if nothing we get check if file existed.
	if($url==""){
		$pathline="[download]";
		$remain=stristr($out,$pathline);
		$urlws=substr($remain,strlen($pathline),stripos($remain,PHP_EOL)-strlen("has already been downloadedhas alread"));
		$url=trim($urlws);
	}


	//now we can return it
	return $url;
}


function proceeddownload($requestURL,&$return_var){
	
	//for safety, ensure it is not a bad
	$requestURL=escapeshellarg($requestURL);

	//make a name for download name
	$cmdoutname=uniqid("out",true).".log";

	//run command
	$cmdoutput=system("./dl.sh '".$requestURL."' ".$cmdoutname,$retval);

	//tell user if success
	$return_var=$retval;

	//check if return value means success
	if($retval!=0){
		return -1;
	}

	//read the infomation
	$file=file_get_contents("cache/".$cmdoutname);

	//if okay we will get the file name
	$filename=getnamefromout($file);

	//now we are able to return
	return $filename;


}

?>