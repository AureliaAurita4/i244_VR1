<?php
if (!empty($_POST)){
	if(!empty($_POST["q"])){
		//google
		$q = urlencode($_POST['q']);
		header("Location: https://www.google.ee?#q={$q}");
		exit(0);
	} else {
		echo "Sisesta otsingus sõna!";
	}
}



?>


<form action="minuGoogle.php" method="POST">
	<input type="text" name="q"/>
	<input type="submit" name="s" value="otsi Googlest" />


</form>