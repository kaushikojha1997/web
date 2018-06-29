<?php
  	define("PATH", dirname(__FILE__));

 	$public_end = strpos($_SERVER['SCRIPT_NAME'], '/smartmobi') + 10 ;
  	$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  	define("WWW_ROOT", $doc_root);

  	function url_for($script_path) {
  	// add the leading '/' if not present
  	if($script_path[0] != '/') {
    	$script_path = "/" . $script_path;
  	}
  	echo WWW_ROOT.$script_path;
}

function getPageName(){
	$pageName = $_SERVER['PHP_SELF'];
	$lastpos = strripos($pageName, '/')+1;
  	$page = substr($pageName, $lastpos);	
	return $page;
}

function getPageUrl(){
	$pageName = $_SERVER['REQUEST_URI'];
	//$lastpos = strripos($pageName, '/')+1;
  	// $page = substr($pageName, $lastpos);	
	// return $page;
	echo $pageName;
}
  
  ?>