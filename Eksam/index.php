<!-- Eksami ?lesanne.
		Loo lihtsustatud enampakkumise s?steem. Kasutajad saavad teha pakkumisi. Kuva parima pakkuja nime ja summat. -->

<?php
session_start();

if(empty($_COOKIE["mingiKasutaja"])){
	setcookie("mingiKasutaja", time(), time() + 60 * 15, "/");
}

$user="test";
$host="localhost";
$pass="t3st3r123";
$db="test";
$link = mysqli_connect($host, $user, $pass, $db) or die("Ei saa ühendada!");
mysqli_query($link, "SET CHARACTER SET UTF8");

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>i244 eksam</title>
		
		<style>
			h1 {
				font-family: 'Galdeano';
				font-weight: bold;
				color: #66ccff;
				margin-left: 20px;
			}
			
			#kuvamine:hover {
				cursor: pointer;
				box-shadow: 3px 3px 1px grey;
			}
			
			#kuvamine {
				max-width:47px;
				margin-top: 10px;
				margin-left: 10px;
				display: none;
			}
			
			#saatmine:hover {
				cursor: pointer;
				box-shadow: 3px 3px 1px grey;
			}
			
			#saatmine {
				margin-top: 10px;
				margin-left: 10px;
			}
			
			#lisamine {
				margin-left: 40px;
				display: none;
			}
			
			#kuva-vorm {
				margin-left: 40px;
			}
			
		</style>
		
	</head>
	
	<body>
		<h1>Pakkumiste leht</h1>
		
		<p id="kuva-vorm">
			<button id="kuva-nupp" type="button">Lisa oma pakkumise</button>
		</p>
		
		<form id="lisamine" action="?lisa" method="POST">
			<label>Sinu nimi:</label>
			<div><input type="text" name="nimi"></div>
			<label>Sinu pakkumine:</label>
			<div><input type="number" name="pakkumine"</div>
			<div><input id="saatmine" type="submit" value="Saada"></div>
		</form>
		
		<?php
		if(isset($_GET["lisa"]) && !empty($_POST['nimi']) && !empty($_POST['pakkumine'])){
			$nimi = mysqli_real_escape_string($link, $_POST['nimi']);
			$pakkumine = mysqli_real_escape_string($link, $_POST['pakkumine']);
			$sql = "INSERT INTO Svetlana_Jugai_pakkumised (nimi, pakkumine) VALUES ('$nimi', '$pakkumine')";
			$result = mysqli_query($link, $sql) or die("Ei saa andmeid andmebaasi saata");
		}
		?>
		
		<form id="kuvamine" action="?kuva" method="POST">
			<div><input type="submit" value="Näita"></div>
		</form>
		
		<?php
		if(isset($_GET["kuva"])){
			$pakkumised = array();
			$sql = "SELECT nimi, pakkumine FROM Svetlana_Jugai_pakkumised ORDER BY pakkumine DESC LIMIT 0,1";
			$result = mysqli_query($link, $sql) or die("Ei saa näidata pakkumisi");
			echo " - parim pakkumine".print_r(mysqli_fetch_assoc($result));
		}
		?>
		
		<script src="javascript.js"></script>
	</body>
</html>