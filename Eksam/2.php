<?php
		if(isset($_GET["lisa"]) && !empty($_POST['nimi']) && !empty($_POST['pakkumine'])){
			$nimi = mysqli_real_escape_string($link, $_POST['nimi']);
			$pakkumine = mysqli_real_escape_string($link, $_POST['pakkumine']);
			$sql = "INSERT INTO Svetlana_Jugai_pakkumised (nimi, pakkumine) VALUES ('$nimi', '$pakkumine')";
			$result = mysqli_query($link, $sql) or die("Ei saa andmeid andmebaasi saata");
		}
		?>