<?php
require_once("mudel.php");
session_start();
settingCookies();
serverigaYhendamine();

$mode="";
if(!empty($_GET["mode"])){
	$mode = $_GET["mode"];
}

include_once("head.html");

switch($mode){	
	case "pildid":
		kuva_pilte();
	break;

	case "hinnapakkumine":
		andmeteSaatmine();
		include("hinnapakkumine.html");
	break;
	
	case "ok":
		include("vastus.html");
	break;
	
	default:
		include("pealeht.html");
	break;
}

include_once("foot.html");
?>