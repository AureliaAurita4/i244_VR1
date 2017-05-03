<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Pizza tellimine</title>
	</head>
	<body>
		<form action="?valik" method="POST">
			<label>
				<input type="checkbox" name="lisand[]" value="juust" />
				Juust
			</label><br>
			
			<label>
				<input type="checkbox" name="lisand[]" value="vorst" />
				Vorst
			</label><br>
			
			<label>
				<input type="checkbox" name="lisand[]" value="ananass" />
				Ananass
			</label><br>
			
			<input type="submit" value="Telli" />
		</form>
		<?php
			if(isset($_GET["valik"])){
				if(!empty($_POST["lisand"])){
					echo "Valik on tehtud: <br><ol>";
					
					foreach($_POST["lisand"] as $lisand){
						echo "<li>$lisand</li>";
					}
					echo "</ol>";
				}else{
					echo "Vali midagi";
				}
				
			}else{
				echo "Tere, vali lisandid!";
			}
		
		
		?>
	</body>
</html>