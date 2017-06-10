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
			}
			
		</style>
		
	</head>
	
	<body>
		<h1>Pakkumiste leht</h1>
		
		<form id="lisamine" action="?lisa" method="POST">
			<div><input type="text" name="nimi" placeholder="Sinu nimi"></div>
			<label>Sinu pakkumine:</label>
			<div><input type="number" name="pakkumine"</div>
			<div><input type="submit" value="Saada"></div>
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
			$sql = "SELECT * FROM Svetlana_Jugai_pakkumised ORDER BY pakkumine DESC";
			$result = mysqli_query($link, $sql) or die("Ei saa näidata pakkumisi");
			$ridu = mysqli_num_rows($result);
			
			for($i = 0; $i < $ridu; $i++){
				$pakkumised[] = mysqli_fetch_assoc($result);
			}
		}
		?>
		
		<?php if (!empty($pakkumised)):
		foreach($pakkumised as $id=>$pakkumine):
		?>
		<div><?php echo  htmlspecialchars($pakkumine['pakkumine']); ?></div>
		<?php endforeach;
		endif;?>
		
	</body>
</html>