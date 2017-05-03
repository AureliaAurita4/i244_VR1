<?php

function settingCookies(){
	if(empty($_COOKIE["mingiKasutaja"])){
		setcookie("mingiKasutaja", $_POST["nimi"], time() + 60 * 15, "/");
	}
}

function andmeteKontroll(){
	
	global $nimi, $firma, $telefon, $email, $muuYritus, $koht, $hind, $kommentaar;
	global $nimiError, $emailError, $telefonError, $telefonError2, $kuup2evError;
	global $errors;
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
		} else {
			$kuup2ev = test($_POST["kuup2ev"]);
		}
		
		// KUI KÕIK KORRAS...
		if(empty($errors)){
			header("Location: kontroller.php?mode=ok");
			exit(0);
		}
	}
}

function test($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


?>

