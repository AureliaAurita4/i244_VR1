<?php

require_once("mudel.php");

$mode="";
if(!empty($_GET["mode"])){
	$mode = $_GET["mode"];
}

switch($mode){
	case "kontroll":
		settingCookies();
		settingSession();
		andmeteKontroll();
		include("struktuur.php");
	break;
	
	case "ok":
		include("vastus.php");
	break;
	
	default:
		include("struktuur.php");
	break;
}

?>