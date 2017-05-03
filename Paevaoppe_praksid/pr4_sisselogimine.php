<?php include("pr4_header.php"); ?>
<?php include("pr4_menu.php"); ?>

<form method="post" action="vorm.php">

	<input type="hidden" name="aeg" value="2017-02-25">
	
	<table>
		<caption>Sisselogimise vorm</caption>
	
		<!-- input: text -->
		<tr>
			<th>
				<label for="usermane-id">
					Kasutajanimi
				</label>
			</th>
			<td>
				<input type="text" name="username" id="usermane-id" placeholder="Sisesta kasutajanimi" value="testkasutaja">
			</td>
		</tr>
	
		<!-- input: text -->
		<tr>
			<th>
				<label for="password-id">
					Parool
				</label>
			</th>				
			<td>
				<input type="password" name="password" id="password-id" placeholder="Sisesta parooli">
			</td>
		</tr>
	
		<!-- input: radio -->
		<tr>
			<th>
			Sugu
			</th>
			<td>
				<label>
					<input type="radio" name="sex" value="woman" checked>Naine<br>
					<input type="radio" name="sex" value="man">Mees
				</label>
			</td>
		
		</tr>
		
		<!-- input: checkbox -->
		<tr>
			<td colspan="2">
				<label>
					<input type="checkbox" name="remember_me" value="pea meeles">Jäta mind meelde
				</label>
			</td>
		</tr>
		
		<!-- input: file -->
		<tr>
			<td>input: file <sup>*</sup></td>
			<td>
				<input type="file">
			</td>
		</tr>
		
		<!-- input: button -->
		<tr>
			<td colspan="2">
				<button type="submit"><em>Registreeri</em></button>
			</td>
		</tr>
	
	</table>
	
</form>

<?php include("pr4_footer.php"); ?>