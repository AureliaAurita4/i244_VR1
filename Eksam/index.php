<!-- Eksami ?lesanne.
		Loo lihtsustatud enampakkumise s?steem. Kasutajad saavad teha pakkumisi. Kuva parima pakkuja nime ja summat. -->

<?php
include("1.php");
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
			}
			
			#kuva-vorm {
				margin-left: 40px;
			}
			
		</style>
		
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
		
		<?php
		include("2.php");
		?>
		
			<form id="kuvamine" action="?kuva" method="POST">
				<div><input type="submit" value="Näita"></div>
			</form>
		
		<?php
		include("3.php");
		?>
	</body>
</html>