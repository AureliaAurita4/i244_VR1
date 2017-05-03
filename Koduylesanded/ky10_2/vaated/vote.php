<?php if(empty($_SESSION["voted_for"])):?>
<h3>Vali oma lemmik :)</h3>
<form action="?mode=tulemus" method="POST">
	<?php foreach($pildid as $i=>$pilt):?>
		<p>
			<label for="p<?php echo $i;?>">
				<img src="pildid/nameless<?php echo $i+1;?>.jpg" alt="nimetu <?php echo $i+1;?>" height="100" />
			</label>
			<input type="radio" value="<?php echo $i;?>" id="p<?php echo $i;?>" name="pilt"/>
		</p>
	<?php endforeach; ?>
	<br/>
	<input type="submit" value="Valin!"/>
</form>
<?php else:
	include_once("vaated/tulemus.php");
	endif; ?>