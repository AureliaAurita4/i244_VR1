<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Hinnapakkumine</title>
		<link rel="stylesheet" type="text/css" href="stiil.css">
	</head>
	
	<body>

	<!-- VORM HINNAPAKKUMISE KÜSIMUSEKS -->
	
		<h1>Hinnapakkumine</h1>
		
		<div>
			Kas teil on sünnipäev? Või teie firma soovib korraldada pidu? Küsige meilt hinnapakkumist. Garanteerime maksimaalset protsenti hinna ja kvaliteedi suhtes!
		</div>
		
		<form action="kontroller.php?mode=kontroll" method="POST">
		
			<div class="vajalik">
				<input id="nimi" type="text" name="nimi" placeholder="Teie nimi" value="<?php echo isset($nimi) ? $nimi : ''; ?>"><span class="error">* <?php echo isset($nimiError) ? $nimiError : ''; ?></span>
			</div>
			
			<div>
				<input type="text" name="firma" placeholder="Firma nimi" value="<?php echo isset($firma) ? $firma : ''; ?>">
			</div>
			
			<div class="vajalik">
				<input type="tel" name="telefon" placeholder="Telefon" value="<?php echo isset($telefon) ? $telefon : ''; ?>"><span class="error">* <?php echo isset($telefonError) ? $telefonError : ''; ?></span>
			</div>
			
			<div class="vajalik">
				<input type="email" name="email" placeholder="Email" value="<?php echo isset($email) ? $email : ''; ?>"><span class="error">* <?php echo isset($emailError) ? $emailError : ''; ?></span>
			</div>
			
			<div>
				<select name="yritus">
					<option selected disabled>Ürituse liik</option>
					<option value="suvep2evad">Suvepäevad</option>
					<option value="talvep2evad">Talvepäevad</option>
					<option value="synnip2ev">Sünnipäev</option>
					<option value="pulmad">Pulmad</option>
					<option value="firmapidu">Firmapidu</option>
					<option value="j6ulupidu">Jõulupidu</option>
					<option value="aastavahetuspidu">Aastavahetuspidu</option>
					<option value="muu">Muu...</option>
				</select>
			</div>
			
			<div>
				<input type="text" name="muuYritus" placeholder="Muu üritus" value="<?php echo isset($muuYritus) ? $muuYritus : ''; ?>">
			</div>
			
			<div>
				<input type="text" name="koht" placeholder="Ürituse koht" value="<?php echo isset($koht) ? $koht : ''; ?>">
			</div>
			
			<div class="vajalik">
				<input type="date" name="kuup2ev"><span class="error">* <?php echo isset($kuup2evError) ? $kuup2evError : ''; ?></span>
			</div>
			
			<div>
				<input type="number" name="hind" placeholder="Soovitav hind" value="<?php echo isset($number) ? $number : ''; ?>">
			</div>
			
			<div>
				<textarea name="kommentaar" rows="10" cols="30" placeholder="Kirjutage soovitusi repertuaari kohta" value="<?php echo isset($kommentaar) ? $kommentaar : ''; ?>"></textarea>
			</div>
			
			<div class="vajalik">
				* märgitud väljad on kohustuslikud
			</div>
			
			<div>
				<ul>
					<li class="button">
						<button type="submit">Saada</button>
					</li>
					<li class="button">
						<button type="reset">Tühista</button>
					</li>
			</div>
		</form>
		
	</body>
</html>