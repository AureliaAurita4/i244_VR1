<?php
if(!empty($_SESSION["voted_for"])){
	echo "Hääletada tohib ainult 1 kord! Valisid pilti: <img src=\"".$_SESSION["voted_for"]."\">";
} else if(empty($_SESSION["voted_for"])){
	echo "Vali pilt, palun";
	//include_once("vaated/vote.php");
} else {
	echo "ERROR";
	include_once("vaated/vote.php");
}
?>

<h3>
    Valiku tulemus
</h3>
<p>
    <?php echo "<img src=\"".$_SESSION["voted_for"]."\">"; ?></p>
<br>