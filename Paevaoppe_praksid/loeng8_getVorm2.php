<?php
//loeng8_getVorm.php?nimi=jjj
if (isset($_GET['loenda']) && isset($_GET['nimi'])){
	if ($_GET['loenda'] != "" && $_GET['nimi'] != ""){
		for($i = 0; $i < $_GET['loenda']; $i++){
			echo "Tere, {$_REQUEST['nimi']}!<br>\n";
		}
	} else{
		echo "Kõik väljad peavad olema täidetud!";
	}
} else{
	echo "Info puudub!";
}
?>

<pre>
<?php print_r($_GET); ?>

</pre>