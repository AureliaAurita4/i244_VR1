<!-- Eksami ?lesanne.
		Loo lihtsustatud enampakkumise s?steem. Kasutajad saavad teha pakkumisi. Kuva parima pakkuja nime ja summat. -->

<?php include("serverigaYhendus.php"); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>i244 eksam</title>

		<link rel="stylesheet" href="stiil.css" type="text/css">
		
	</head>
	
	<body>
		<h1>Pakkumiste leht</h1>
		
		<form id="lisamine" action="?lisa" method="POST">
			<label>Sinu nimi:</label>
			<div><input type="text" name="nimi"></div>
			<label>Sinu pakkumine:</label>
			<div><input type="number" name="pakkumine"</div>
			<div><input id="saatmine" type="submit" value="Saada"></div>
		</form>
		
		<?php include("andmebaasiSalvestamine.php"); ?>
		
			<form id="kuvamine" action="?kuva" method="POST">
				<div><input type="submit" value="Näita"></div>
			</form>
		
		<?php include("tulemuseKuvamine.php"); ?>
	</body>
</html>