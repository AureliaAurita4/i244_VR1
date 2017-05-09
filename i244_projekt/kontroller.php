<?php
require_once("mudel.php");

$mode="";
if(!empty($_GET["mode"])){
	$mode = $_GET["mode"];
}

include_once("head.html");

switch($mode){	
	case "pildid":
		include("pildid.html");
	break;
	
	case "hinnapakkumine":
		settingCookies();
		serverigaYhendamine();
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