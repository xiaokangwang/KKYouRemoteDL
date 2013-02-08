<?php
/*
library for the whole solution
*/


function checkreq(requestURL){

//request mustn't be empty
if(requestURL==""){
	return -1;
}

//in the submited url should not include ' or "
if(stripos(requestURL,'"')!=false||stripos(requestURL,"'")!=false){
	return -1;
}

//if we still here it is okay to return 0 means it is ok
return 0;
}

function proceeddownload(requestURL){
	
}

?>