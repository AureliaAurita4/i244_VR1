<?php
$loom = "koer";

if ($loom == "kala") {
	echo "kala ujub vees";
} else if ($loom == "hobune") {
	echo "hobused söövad heina";
}else if ($loom == "koer") {
	echo "koer närib konte";
} else if ($loom == "kass") {
	echo "kass püüab hiiri";
}
else {
	echo "ma ei tea, mis loom see on";
}

echo "<br>";

switch($loom){
	case "kala":
		echo "kala ujub vees";
	break;
	case "hobune":
		echo "hobused söövad heina";
	break;
	case "koer":
		"koer närib konte";
	break;
	case "kass":
		echo "kass püüab hiiri";
	break;
	default:
		echo "ma ei tea, mis loom see on";
	break;
}

?>