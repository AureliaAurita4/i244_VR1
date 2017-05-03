<h3>Fotod</h3>
	
<div id="gallery">
	<?php foreach($pildid as $i=>$pilt):?>
		<img src="pildid/nameless<?php echo $i+1;?>.jpg" alt="nimetu <?php echo $i+1;?>" />
	<?php endforeach; ?>
</div>