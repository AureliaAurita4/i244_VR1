<?php



$tudengid = array(array('nimi' => 'Katrin', 'grupp' => 'DK12', 'keskhinne' => 4.2, 'l6putooteema' => 'esitatud'), array('nimi' => 'Jaanus', 'grupp' => 'DK13', 'keskhinne' => 3.5, 'l6putooteema' => 'esitatud'), array('nimi' => 'Priit', 'grupp' => 'DK11', 'keskhinne' => 1.2, 'l6putooteema' => 'pole esitatud'));

foreach($tudengid as $tudeng){
	include("koduylesanne7_osa3.html");
}

?>