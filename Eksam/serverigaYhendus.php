<?php
session_start();

if(empty($_COOKIE["mingiKasutaja"])){
	setcookie("mingiKasutaja", time(), time() + 60 * 15, "/");
}

$user="test";
$host="localhost";
$pass="t3st3r123";
$db="test";
$link = mysqli_connect($host, $user, $pass, $db) or die("Ei saa uhendada!");
mysqli_query($link, "SET CHARACTER SET UTF8");

?>