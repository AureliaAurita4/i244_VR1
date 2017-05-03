<?php
$tekst = "PIIM";
//$tekst_massiivis = array();

function peegel($tekst) {
	
	for($i = (strlen($tekst) - 1); $i >= 0; $i--){
		//$tekst_massiivis[$i] = $tekst[strlen($tekst)-1];
		echo "$tekst[$i]";
	}
}

peegel($tekst);

?>