<?php
require_once("mudel.php");

$mode="";
if(!empty($_GET["mode"])){
	$mode = $_GET["mode"];
}

include_once("head.html");

switch($mode){
	case "kontroll":
		settingCookies();
		settingSession();
		andmeteKontroll();
		include("struktuur.html");
	break;
	
	case "pildid":
		include("pildid.html");
	break;
	
	case "hinnapakkumine":
		include("hinnapakkumine.html");
	break;
	
	default:
		include("pealeht.html");
	break;
}

include_once("foot.html");

?>