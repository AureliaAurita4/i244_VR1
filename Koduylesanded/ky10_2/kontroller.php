<?php
$expire = 15*60;

ini_set('session.gc-maxlifetime', $expire);

session_start(); 

if (isset($_SESSION['LAST_ACTIVITY']) && (time()-$_SESSION['LAST_ACTIVITY'] > $expire)){ 
	session_unset();
	session_destroy();
	session_start();
}

require_once("vaated/head.html");

if (!empty($_GET["mode"])){
	$page = $_GET["mode"];
} else {
	$page = "pealeht";
}

$pildid = array("pildid/nameless1.jpg", "pildid/nameless2.jpg", "pildid/nameless3.jpg", "pildid/nameless4.jpg", "pildid/nameless5.jpg", "pildid/nameless6.jpg");

switch ($page){
	case "galerii":
		include("vaated/galerii.php");
		break;
	case "vote":
		include("vaated/vote.php");
		break;
	case "tulemus":
		include("vaated/tulemus.php");
		break;
	default:
		include("vaated/pealeht.html");
		break;
}
	

require_once("vaated/foot.html");
?>