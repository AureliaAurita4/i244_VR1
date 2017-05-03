<?php
//loeng8_getVorm.php?nimi=jjj
if (!empty($_GET['loenda']) && !empty($_GET['nimi'])){
	for($i = 0; $i < $_GET['loenda']; $i++){
		echo "Tere, {$_REQUEST['nimi']}!<br>\n";
	}
} else{
	echo "Info puudub või on täitmata!";
}
?>

<pre>
<?php print_r($_GET); ?>

</pre>