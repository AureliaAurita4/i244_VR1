<?php
if(isset($_GET["kuva"])){
	$pakkumised = array();
	$sql = "SELECT nimi, pakkumine FROM Svetlana_Jugai_pakkumised ORDER BY pakkumine DESC LIMIT 0,1";
	$result = mysqli_query($link, $sql) or die("Ei saa näidata pakkumisi");
	echo htmlspecialchars(print_r(mysqli_fetch_assoc($result), TRUE));
}
?>