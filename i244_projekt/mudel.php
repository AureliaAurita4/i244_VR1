<?php

function settingCookies(){
	if(empty($_COOKIE["mingiKasutaja"])){
		setcookie("mingiKasutaja", time(), time() + 60 * 15, "/");
	}
}

function serverigaYhendamine(){
	global $link;
	$user = "test";
	$pass = "t3st3r123";
	$db = "test";
	$host = "localhost";
	
	$link = mysqli_connect($host, $user, $pass, $db) or die("Ühendust ei ole");
	mysqli_query($link, "SET CHARACTER SET UTF8");
}

function andmeteSaatmine(){
	
	global $nimi, $firma, $telefon, $email, $muuYritus, $koht, $hind, $kommentaar, $kuup2ev, $yritus;
	global $nimiError, $emailError, $telefonError, $telefonError2, $kuup2evError;
	global $errors;
	global $link;
	$errors = Array();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["nimi"])) {
			$nimiError = "Kirjutage oma nime";
			$errors[] = $nimiError;
		} else {
			$nimi = test($_POST["nimi"]);
		}
  
		if (empty($_POST["email"])) {
			$emailError = "Kirjutage oma emaili";
			$errors[] = $emailError;
		} else {
			$email = test($_POST["email"]);
		}
    
		if (empty($_POST["telefon"])) {
			$telefonError = "Mis on Teie telefon?";
			$errors[] = $telefonError;
		} else if (!is_numeric($_POST["telefon"])) {
			$telefonError2 = "Telefoni nr peab sisaldama ainult numbreid";
			$errors[] = $telefonError2;
		} else {
			$telefon = test($_POST["telefon"]);
		}

		if (empty($_POST["kuup2ev"])) {
			$kuup2evError = "Valige, palun, kuupäeva";
			$errors[] = $kuup2evError;
		} else if (var_dump(checkdate($_POST['kuup2ev']))) {
			$kuup2ev = test($_POST["kuup2ev"]);
		}
		
		// KUI KÕIK KORRAS...
		if(empty($errors)){
			
			$nimi = mysqli_real_escape_string($link, $_POST["nimi"]);
			$firma = mysqli_real_escape_string($link, $_POST["firma"]);
			$telefon = mysqli_real_escape_string($link, $_POST["telefon"]);
			$email = mysqli_real_escape_string($link, $_POST["email"]);
			$yritus = mysqli_real_escape_string($link, $_POST["yritus"]);
			$muuYritus = mysqli_real_escape_string($link, $_POST["muuYritus"]);
			$koht = mysqli_real_escape_string($link, $_POST["koht"]);
			$kuup2ev = mysqli_real_escape_string($link, $_POST["kuup2ev"]);
			$hind = mysqli_real_escape_string($link, $_POST["hind"]);
			$kommentaar = mysqli_real_escape_string($link, $_POST["kommentaar"]);
			
			$sql = "INSERT INTO Svetlana_Jugai_10142864 (nimi, firma, telefon, email, yritus, muuYritus, koht, kuup2ev, hind, kommentaar) VALUES ('$nimi', '$firma', '$telefon', '$email', '$yritus', '$muuYritus', '$koht', '$kuup2ev', '$hind', '$kommentaar')";
			$result = mysqli_query($link, $sql) or die($sql . " - " . mysqli_error($link));
			
			if($result){
				header("Location: kontroller.php?mode=ok");
				exit(0);
				mysqli_free_result();
				mysqli_close();
			}
		}
	}
}

function test($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function login(){
	global $kasutaja, $parool;
	global $kasutajaError, $paroolError;
	$errors = array();
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["kasutaja"]) || htmlspecialchars($_POST["kasutaja"]) != "TJ"){
			$kasutajaError = "Vale kasutajanimi!";
			$errors[] = $kasutajaError;
		}
		if(empty($_POST["parool"]) || htmlspecialchars($_POST["parool"]) != "TJP"){
			$paroolError = "Vale parool!";
			$errors[] = $paroolError;
		}
		
		if(empty($errors)){
			if(htmlspecialchars($_POST["kasutaja"]) == "TJ" && htmlspecialchars($_POST["parool"]) == "TJP"){
				header("Location: kontroller.php?mode=sisselogitud");
				exit(0);				
			}
		}
	}
}

function kuva_pilte() {
	global $link;
	global $ridu;
	$pildid = Array();
	
	$sql = "SELECT id, nimi, pilt FROM Svetlana_Jugai_pildid_10142864";
	$result = mysqli_query($link, $sql) or die("Pilte ei ole võimalik kuvada.");
	
	$ridu = mysqli_num_rows($result);
	
	for($i = 0; $i < $ridu; $i++) {
		$pildid[] = mysqli_fetch_assoc($result);
		
	}
	include_once("pildid2.html");
}

?>

