<?php
//loeng8_getVorm.php?nimi=jjj
for($i = 0; $i < $_GET['loenda']; $i++){
	echo "Tere, {$_REQUEST['nimi']}!<br>\n";
}


?>

<pre>
<?php print_r($_GET); ?>

</pre>